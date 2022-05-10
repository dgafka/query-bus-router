<?php

namespace App;

use Ecotone\Messaging\Attribute\ServiceActivator;
use Ecotone\Modelling\Attribute\QueryHandler;

final class ShopQueryHandler
{
    #[QueryHandler("query-coffee-shop")]
    public function queryOne(): string
    {
        return "coffee";
    }

//  We are routing directly to given channel name, so we use lower level abstraction ServiceActivator
//  The benefit of it is, that endpoint is actually hidden and can not be called directly from QueryBus.
    #[ServiceActivator("query-milk-shop")]
    public function queryTwo(): string
    {
        return "milk";
    }
}