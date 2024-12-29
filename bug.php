```php
function processData(array $data): array {
  foreach ($data as &$value) {
    if (is_array($value)) {
      $value = processData($value); // Recursive call
    } elseif (is_string($value)) {
      $value = strtoupper($value); // Process string values
    }
  }
  return $data;
}

$data = [
  'a' => 'hello',
  'b' => [
    'c' => 'world',
    'd' => 123
  ],
  'e' => 456
];

$processedData = processData($data);
print_r($processedData);
```