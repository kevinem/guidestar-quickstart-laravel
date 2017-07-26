<?php


namespace KevinEm\GuideStar\Laravel\Providers;


use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;
use KevinEm\GuideStar\QuickStartSearch;

class QuickStartSearchServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $config = $this->app['path.config'] . '/guidestar.php';

        $this->publishes([
            __DIR__ . '/../config.php' => $config
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config.php', 'guidestar');
        $this->app->bind('guidestar-quickstart-search', $this->createProviderClosure());
    }

    /**
     * @return \Closure
     */
    protected function createProviderClosure()
    {
        return function ($app) {
            return new QuickStartSearch(new Client(), [
                'apiKey' => $app['config']['guidestar']['search_api_key'],
                'username' => $app['config']['guidestar']['username'],
                'password' => $app['config']['guidestar']['password'],
            ]);
        };
    }
}