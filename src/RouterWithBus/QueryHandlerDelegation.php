<?php

namespace App\RouterWithBus;

use App\QueryService;
use Ecotone\Messaging\Message;
use Ecotone\Modelling\Attribute\QueryHandler;

final class QueryHandlerDelegation
{
    const QUERY_SHOP = "query-shop";

    #[QueryHandler(self::QUERY_SHOP, outputChannelName: QueryService::QUERY_ROUTER)]
    public function delegate(Message $message): Message
    {
        /** Pass through message */
        return $message;
    }
}