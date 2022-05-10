<?php

namespace App\RouterWithGateway;

use App\QueryService;
use Ecotone\Messaging\Attribute\MessageGateway;

interface QueryGateway
{
    #[MessageGateway(QueryService::QUERY_ROUTER)]
    public function query(string $queryEndpoint): string;
}