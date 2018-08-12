<?php

namespace Turker\ConfigAutoloader;

use Illuminate\Support\ServiceProvider as BaseProvider;

/**
 * Class ServiceProvider
 *
 * @package Turker\ConfigAutoloader
 */
class ServiceProvider extends BaseProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $path = $this->app->getConfigurationPath();
        $files = scandir($path);
        if (count($files) === 2) {
            return;
        }

        foreach ($files as $file) {
            if (ends_with($file, '.php')) {
                $key = str_replace('.php', '', $file);
                $config_path = $path . '/' . $file;
                $this->mergeConfigFrom($config_path, $key);
            }
        }
    }
}
