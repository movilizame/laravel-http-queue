# Laravel 5 Http Queue Driver
 

### Install

Require the latest version of this package with Composer

    composer require movilizame/laravel-http-queue

Add the Service Provider to the providers array in config/app.php

    Movilizame\Queue\HttpServiceProvider::class,
 

You should now be able to use the http driver in config/queue.php.

    'connections' => array(
        ...
        'http' => array(
            'driver' => 'http',
            'host' => 'http://localhost:8080/worker'
        ),
        ...
    }

Set the default to `http`, either by changing to config or setting `QUEUE_DRIVER` in your `.env` file to `http`.
 