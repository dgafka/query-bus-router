<?php

namespace App;

use Ecotone\Modelling\Attribute\QueryHandler;

final class ShopQueryHandler
{
    #[QueryHandler("query-coffee-shop")]
    public function queryOne(): string
    {
        return "coffee";
    }

    #[QueryHandler("query-milk-shop")]
    public function queryTwo(): string
    {
        return "milk";
    }
}