```php
function processData(array $data): array {
  $processedData = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $processedData[$key] = processData($value); // Recursive call
    } elseif (is_string($value)) {
      $processedData[$key] = strtoupper($value); // Process string values
    } else {
      $processedData[$key] = $value; // Keep other data types as they are
    }
  }
  return $processedData;
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