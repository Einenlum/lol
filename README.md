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
