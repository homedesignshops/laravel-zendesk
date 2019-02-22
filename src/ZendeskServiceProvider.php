<?php
namespace HomeDesignShops\Zendesk;

use Illuminate\Support\ServiceProvider;

class ZendeskServiceProvider extends ServiceProvider
{
    /**
     * @var string $packageName The name of the package.
     */
    protected $packageName = 'zendesk';

    /**
     * @var string $configPath Path to the package config file.
     */
    protected $configPath = __DIR__ . '/../config/zendesk.php';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app->bind('zendesk', ZendeskClient::class);

        $this->publishes([
            $this->configPath => config_path(sprintf('%s.php', $this->packageName)),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            $this->configPath, $this->packageName
        );
    }
}