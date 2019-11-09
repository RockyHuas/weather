<?php
/**
 * Created by RockyHuas.
 * User: Huangzb
 * Date: 2019/11/8
 * Time: 18:28
 */

namespace RockyHuas\Weather;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function(){
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }
}