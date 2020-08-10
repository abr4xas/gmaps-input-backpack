<?php

namespace Abr4xas\CustomGoogleMapsFieldForBackpack;

use Illuminate\Support\ServiceProvider;

class AddonServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(realpath(__DIR__ . '/resources/views'), 'custom-google-maps-field-for-backpack');
    }
}
