<?php
// treat this as json
header('Content-Type: application/json');
// handle the request
if (!isset($_GET['category']) || !preg_match('/^[A-Z]$/', $_GET['category'])) {
  // clear the old headers
  header_remove();
  // set the actual http response code
  http_response_code(404); // ok, validation error, or failure
  header('Status: 404 Not Found');
  exit();
}
// consider this is a database
$database = [
  'A' => [
    [
      'id' => 'A-123',
      'name' => 'Produtc 01 from Category A'
    ],
    [
      'id' => 'A-234',
      'name' => 'Produtc 02 from Category A'
    ],
    [
      'id' => 'A-345',
      'name' => 'Produtc 03 from Category A'
    ],
    [
      'id' => 'A-456',
      'name' => 'Produtc 04 from Category A'
    ]
  ],
  'B' => [
    [
      'id' => 'B-123',
      'name' => 'Produtc 01 from Category B'
    ],
    [
      'id' => 'B-234',
      'name' => 'Produtc 02 from Category B'
    ],
    [
      'id' => 'B-345',
      'name' => 'Produtc 03 from Category B'
    ],
  ],
  'C' => [
    [
      'id' => 'C-123',
      'name' => 'Produtc 01 from Category C'
    ],
    [
      'id' => 'C-234',
      'name' => 'Produtc 02 from Category C'
    ],
  ],
  'D' => [],
];

die(json_encode($database[$_GET['category']]));
