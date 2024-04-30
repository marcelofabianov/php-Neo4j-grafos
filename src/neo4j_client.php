<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use Laudis\Neo4j\ClientBuilder;

$client = ClientBuilder::create()
    ->withDriver('bolt', 'bolt://neo4j:yPpiiQRxMTQ8qG@neo4j:7687') // Use 'bolt' como esquema URI para conexão com Bolt
    ->withDefaultDriver('bolt')
    ->build();

$result = $client->run('CREATE (n:Person {name: $name}) RETURN n', ['name' => 'John']);

foreach ($result->getResults() as $record) {
    echo 'Node created with ID: ' . $record->get('n')->identity() . PHP_EOL;
}
