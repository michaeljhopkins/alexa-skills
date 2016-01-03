<?php

namespace Alexa\Providers;

use ConnorVG\WolframAlpha\WolframAlpha;
use Illuminate\Support\ServiceProvider;

class WolframAlphaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerWolframAlpha();
    }

    protected function registerWolframAlpha()
    {
        $this->app->bind('wolframalpha', function($app)
        {
            return new WolframAlpha($app['config']->get('services.wolfram.key'));
        });
    }
}
