# HasOffers PHP Client

## Installation

```js
"require": {
    "draperstudio/hasoffers-php-client": "~1.0"
}
```

## Example

```php
$client = new DraperStudio\HasOffers\Client('API_KEY', 'NETWORK_ID');

$offers = $client->api('Affiliate\Offer');

try {
    $response = $offers->findAll(['limit' => 5]);

    var_dump($response);
} catch (DraperStudio\HasOffers\Exception $e) {
    echo($e->getMessage());
}
```

## Supported
- Affiliate API
- Brand API
- FurtherMobi
- YeahMobi
