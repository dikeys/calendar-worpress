<?php

namespace Inc;



class Init
{

    public static function get_services()
    {
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
        ];
    }
    public static  function started_services()
    {
        foreach (self::get_services() as $service) {
            $service = self::instantiate($service);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }

    public static function instantiate($service)
    {
        return new $service();
    }
}
