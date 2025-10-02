<?php

namespace Artengin\ComposerEventTester;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class ComposerEventTesterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Event::listen('composer_package.artengin/composer-event-tester:post_install', function () {
            echo "Package installed!\n";
        });

        Event::listen('composer_package.artengin/composer-event-tester:pre_uninstall', function () {
            echo "Package will be uninstalled!\n";
        });
    }
}
