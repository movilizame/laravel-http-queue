<?php

namespace Movilizame\Queue;

use Barryvdh\Queue\Connectors\HttpConnector;
use Illuminate\Support\ServiceProvider;

class HttpServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Add the connector to the queue drivers.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerHttpConnector($this->app['queue']);
    }

    /**
     * Register the Async queue connector.
     *
     * @param \Illuminate\Queue\QueueManager $manager
     *
     * @return void
     */
    protected function registerHttpConnector($manager)
    {
        $manager->addConnector('http', function () {
            return new HttpConnector();
        });
    }
 
    public function register() {

    }
}
