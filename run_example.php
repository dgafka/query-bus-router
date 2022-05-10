<?php

require __DIR__ . "/vendor/autoload.php";

use App\RouterWithBus\QueryHandlerDelegation;
use App\RouterWithGateway\QueryGateway;
use Ecotone\Lite\EcotoneLiteApplication;

$messagingSystem = EcotoneLiteApplication::boostrap();
$queryBus = $messagingSystem->getQueryBus();
/** @var QueryGateway $queryGateway */
$queryGateway = $messagingSystem->getGatewayByName(QueryGateway::class);

echo $queryGateway->query("milk") . "\n";
echo $queryGateway->query("coffee") . "\n";


echo $queryBus->sendWithRouting(QueryHandlerDelegation::QUERY_SHOP, "milk") . "\n";
echo $queryBus->sendWithRouting(QueryHandlerDelegation::QUERY_SHOP, "coffee") . "\n";