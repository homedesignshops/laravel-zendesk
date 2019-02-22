<?php
namespace HomeDesignShops\Zendesk\Tests;

use HomeDesignShops\Zendesk\Exceptions\ConfigException;
use HomeDesignShops\Zendesk\ZendeskClient;
use Zendesk\API\Exceptions\AuthException;

class ZendeskClientTest extends TestCase
{
    /** @test */
    public function throw_an_invalid_argument_if_unconfigured(): void
    {
        $this->expectException(ConfigException::class);

        $this->app['config']->set('zendesk.subdomain', null);
        $this->app['config']->set('zendesk.username', null);
        $this->app['config']->set('zendesk.token', null);

        new ZendeskClient();
    }

    /** @test */
    public function throw_an_auth_exception_for_invalid_auth_strategy(): void
    {
        $this->expectException(AuthException::class);

        $this->app['config']->set('zendesk.subdomain', 'foo');
        $this->app['config']->set('zendesk.username', 'bar');
        $this->app['config']->set('zendesk.token', 'foobar_token');
        $this->app['config']->set('zendesk.auth_strategy', 'foobarstrategy');

        new ZendeskClient();
    }

    /** @test */
    public function throw_an_badmethod_exception_on_bad_method_call(): void
    {
        $this->expectException(\BadMethodCallException::class);

        $this->setDefaultConfig();

        $zendeskClient = new ZendeskClient();

        $zendeskClient->fooBar();
    }

    /** @test */
    public function throw_an_badmethod_exception_on_bad_property_call(): void
    {
        $this->expectException(\BadMethodCallException::class);

        $this->setDefaultConfig();

        $zendeskClient = new ZendeskClient();

        $zendeskClient->fooBar;

    }


    /**
     * Sets the default config for testing.
     */
    protected function setDefaultConfig(): void
    {
        $this->app['config']->set('zendesk.subdomain', 'foo');
        $this->app['config']->set('zendesk.username', 'bar');
        $this->app['config']->set('zendesk.token', 'foobar_token');
        $this->app['config']->set('zendesk.auth_strategy', 'basic');
    }
}