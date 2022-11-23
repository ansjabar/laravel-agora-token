<?php

namespace AnsJabar\LaravelAgoraToken;

use Illuminate\Support\Str;
use Illuminate\Support\ServiceProvider;

class AgoraServiceProvider extends ServiceProvider
{
    /**
     * The Laravel application instance.
     *
     * @var \Illuminate\Foundation\Application
     */
    protected $app;

    /**
     * True when booted.
     *
     * @var bool
     */
    protected $booted = false;


    /**
     * @param Application $app
     */
    public function __construct($app = null)
    {
        if (!$app) {
            $app = app();   //Fallback when $app is not given
        }
        $this->app      = $app;
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->booted) {
            return;
        }

        $this->publishes([
            __DIR__ . '/config/agora.php' => config_path('agora.php'),
        ]);
    }
}
