<?php

namespace Amethyst\Providers;

use Amethyst\Common\CommonServiceProvider;

class ShipmentServiceProvider extends CommonServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Amethyst\Providers\AddressServiceProvider::class);
    }
}
