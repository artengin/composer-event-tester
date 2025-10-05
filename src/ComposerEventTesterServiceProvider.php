<?php

namespace Artengin\Support;

use Illuminate\Support\ServiceProvider;

class ComposerEventTesterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app['events']->listen('composer_package.artengin/composer-event-tester:post_install', function () {
            echo "\n\nPackage installed!\n\n\n";
        });

        $this->app['events']->listen('composer_package.artengin/composer-event-tester:pre_uninstall', function () {
            echo "\n\nPackage will be uninstalled!\n\n\n";
        });
    }
}
