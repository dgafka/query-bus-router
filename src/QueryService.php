<?php

namespace App;

use Ecotone\Messaging\Attribute\Router;

final class QueryService
{
    const QUERY_ROUTER = "query.router";

    #[Router(self::QUERY_ROUTER)]
    public function getQuery(string $shopName): string
    {
        return sprintf("query-%s-shop", $shopName);
    }
}