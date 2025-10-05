<?php

namespace Artengin\Support;

use Illuminate\Support\ServiceProvider;

class ComposerEventTesterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app['events']->listen('composer_package.artengin/composer-event-tester:post_install', function () {
            echo PHP_EOL."Package installed!".PHP_EOL;
        });

        $this->app['events']->listen('composer_package.artengin/composer-event-tester:pre_uninstall', function () {
            echo PHP_EOL."Package will be uninstalled!".PHP_EOL;
        });
    }
}
