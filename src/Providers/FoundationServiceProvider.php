<?php

namespace Tripteki\Foundation\Providers;

use Illuminate\Support\ServiceProvider;

class FoundationServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        $this->registerPublishers();
    }

    /**
     * @return void
     */
    protected function registerPublishers()
    {
        $this->publishes(
        [
            __DIR__."/../../config/modules.php" => config_path("modules.php"),
        ],

        "tripteki-laravelphp-foundation");
    }
};