<?php
namespace HomeDesignShops\Zendesk\Tests;

use HomeDesignShops\Zendesk\ZendeskFacade;
use HomeDesignShops\Zendesk\ZendeskServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [ZendeskServiceProvider::class];
    }
    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Zendesk' => ZendeskFacade::class,
        ];
    }
}