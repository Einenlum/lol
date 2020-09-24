# Wtf?

Cf. index.php:

```
$serializer = JMS\Serializer\SerializerBuilder::create()->build();
$object = $serializer->deserialize($data, DTO::class, 'json');
```


```
var_dump($object);

class App\DTO#49 (2) {
  private $orderId =>
  NULL
  private $referenceNumber =>
  NULL
}

```


```
var_dump(json_decode($data, true));

array(2) {
  'orderId' =>
  string(3) "wtf"
  'referenceNumber' =>
  string(4) "wut?"
}

```

## Update

Found the problem.

JMS Serializer changes the json to an array like `['order_id' => 'wtf']`. Then it looks for a `order_id` property but can't find one.

Conclusion?

```
var_dump($serializer->deserialize('{"orderId": "caca"}', DTO::class, 'json'));

class App\DTO#14 (1) {
  private $orderId =>
  NULL
}

var_dump($serializer->deserialize('{"order_id": "caca"}', DTO::class, 'json'));

class App\DTO#44 (1) {
  private $orderId =>
  string(4) "caca"
}
```
