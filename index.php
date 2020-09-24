<?php

use App\DTO;

require_once(__DIR__.'/vendor/autoload.php');

$data = <<<JSON
{
  "orderId": "65zq1d5qz1d56q1",
  "referenceNumber": "65zq1d5qz1d56q1-456"
}
JSON;

$serializer = JMS\Serializer\SerializerBuilder::create()->build();
$object = $serializer->deserialize($data, DTO::class, 'json');

var_dump($object);
