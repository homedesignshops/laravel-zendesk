<?php

namespace HomeDesignShops\Zendesk;

use BadMethodCallException;
use HomeDesignShops\Zendesk\Exceptions\ConfigException;
use Zendesk\API\HttpClient;

/**
 * Class ZendeskClient
 * @package HomeDesignShops\Zendesk
 */
class ZendeskClient extends ZendeskAbstract
{
    /**
     * @var string $subdomain The Zendesk subdomdain
     */
    protected $subdomain;

    /**
     * @var string $username The Zendesk username
     */
    protected $username;

    /**
     * @var string $token The Zendesk username's token
     */
    protected $token;

    /**
     * @var HttpClient $client The HttpClient of the Zendesk Api
     */
    protected $client;

    /**
     * @var string $auth_strategy The auth strategy to use for Zendesk Api calls
     */
    protected $auth_strategy;

    /**
     * ZendeskClient constructor.
     *
     * @throws \Zendesk\API\Exceptions\AuthException
     * @throws ConfigException
     */
    public function __construct()
    {
        $this->loadConfig();

        $this->setupAuthStrategy();
    }

    /**
     * Pass any method calls onto $this->client. We don't need to
     * check if the method is callable, because the client uses the
     * magic __call method as well, so it will always return true.
     *
     * @param string $method
     * @param array $args
     * @return mixed|HttpClient
     */
    public function __call($method, $args) {

        try {
            return call_user_func_array([$this->client,$method],$args);
        } catch (\Exception $e) {}

        throw new BadMethodCallException("Method $method does not exist");
    }

    /**
     * Pass any property calls onto $this->client.
     *
     * @param string $property
     * @return mixed
     */
    public function __get($property) {

        if(property_exists($this->client,$property)) {
            return $this->client->{$property};
        }

        throw new BadMethodCallException("Property $property does not exist");
    }


    /**
     * Load the config variables.
     *
     * @throws ConfigException
     */
    protected function loadConfig(): void
    {
        $this->subdomain = config('zendesk.subdomain');
        $this->username = config('zendesk.username');
        $this->token = config('zendesk.token');
        $this->auth_strategy = config('zendesk.auth_strategy', $this->auth_strategy);

        // Check if the config is valid. If not, throw ConfigException
        if (!$this->isValidConfig()) {
            throw new ConfigException('Please set ZENDESK_SUBDOMAIN, ZENDESK_USERNAME and ZENDESK_TOKEN in your .env file.');
        }
    }

    /**
     * Checks if the config is valid.
     *
     * @return bool
     */
    protected function isValidConfig(): bool
    {
        return $this->subdomain ||
            $this->username ||
            $this->token;
    }

    /**
     * Setup authentication for Zendesk
     *
     * @throws \Zendesk\API\Exceptions\AuthException
     */
    protected function setupAuthStrategy(): void
    {
        $this->client = new HttpClient($this->subdomain, $this->username);
        $this->client->setAuth($this->auth_strategy, [
            'username' => $this->username,
            'token' => $this->token
        ]);
    }
}