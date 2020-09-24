<?php

use App\DTO;

require_once(__DIR__.'/vendor/autoload.php');

$data = '{ "orderId": "wtf", "referenceNumber": "wut?" }';

$serializer = JMS\Serializer\SerializerBuilder::create()->build();
$object = $serializer->deserialize($data, DTO::class, 'json');

// nope?
var_dump($object);
// yes?
var_dump(json_decode($data, true));
