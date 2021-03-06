<?php

namespace App\Services\Shipping;


class FixRateShippingMethod implements ShippingMethodImplementation
{
    
    /**
     * @return int
     */
    static function getRate(): int
    {
        return 15;
    }
    
    /**
     * @return string
     */
    static function getLabel(): string
    {
        return 'Fix Rate Shipping';
    }
    
    /**
     * @return string
     */
    static function getDeliveryTime(): string
    {
        return '5-7 days';
    }
}
