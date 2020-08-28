<?php
require_once( __DIR__ . '/stanze.php');

$stanze = [
  [
    'room_number' => '100',
    'floor' => '1',
    'beds' => '2',
    'created_at' => '2018-05-28 13:33:11',
    'updated_at' => '2018-05-28 13:33:11'
  ],
  [
    'room_number' => '101',
    'floor' => '1',
    'beds' => '3',
    'created_at' => '2018-05-28 13:33:11',
    'updated_at' => '2018-05-28 13:33:11'
  ],
  [
    'room_number' => '102',
    'floor' => '1','beds' => '3',
    'created_at' => '2018-05-28 13:33:11',
    'updated_at' => '2018-05-28 13:33:11'
  ],
  [
  'room_number' => '103',
  'floor' => '1','beds' => '1',
  'created_at' => '2018-05-28 13:33:11',
  'updated_at' => '2018-05-28 13:33:11'
  ],
  [
  'room_number' => '104',
  'floor' => '1',
  'beds' => '2',
  'created_at' => '2018-05-28 13:33:11',
  'updated_at' => '2018-05-28 13:33:11'
  ],
  [
  'room_number' => '105',
  'floor' => '1',
  'beds' => '2',
  'created_at' => '2018-05-28 13:33:11',
  'updated_at' => '2018-05-28 13:33:11'
  ],
  [
  'room_number' => '201',
  'floor' => '2',
  'beds' => '2',
  'created_at' => '2018-05-28 13:33:11',
  'updated_at' => '2018-05-28 13:33:11'
  ],
  [
  'room_number' => '202',
  'floor' => '2',
  'beds' => '3',
  'created_at' => '2018-05-28 13:33:11',
  'updated_at' => '2018-05-28 13:33:11'
  ],
  [
  'room_number' => '203',
  'floor' => '2',
  'beds' => '3',
  'created_at' => '2018-05-28 13:33:11',
  'updated_at' => '2018-05-28 13:33:11'
  ],
  [
  'room_number' => '204',
  'floor' => '2',
  'beds' => '1',
  'created_at' => '2018-05-28 13:33:11',
  'updated_at' => '2018-05-28 13:33:11'
  ],
  [
  'room_number' => '205',
  'floor' => '2',
  'beds' => '2',
  'created_at' => '2018-05-28 13:33:11',
  'updated_at' => '2018-05-28 13:33:11'
  ],
  [
  'room_number' => '301',
  'floor' => '3',
  'beds' => '3',
  'created_at' => '2018-05-28 13:33:11',
  'updated_at' => '2018-05-28 13:33:11'
  ],
  [
  'room_number' => '302',
  'floor' => '3',
  'beds' => '3',
  'created_at' => '2018-05-28 13:33:11',
  'updated_at' => '2018-05-28 13:33:11'
  ],
  [
  'room_number' => '303',
  'floor' => '3',
  'beds' => '2',
  'created_at' => '2018-05-28 13:33:11',
  'updated_at' => '2018-05-28 13:33:11'
  ],
  [
  'room_number' => '304',
  'floor' => '3',
  'beds' => '1',
  'created_at' => '2018-05-28 13:33:11',
  'updated_at' => '2018-05-28 13:33:11'
],
];


foreach ($stanze as $stanza) {
  $stanza = new Stanze($stanza['room_number'], $stanza['floor'], $stanza['beds'], $stanza['created_at'], $stanza['updated_at']);
  $dati_stanza = $stanza->getStanze();
?>

<ul>
  <li>Camera numero: <?php echo $dati_stanza['room_number'] ?></li>
  <li>Piano: <?php echo $dati_stanza['floor'] ?></li>
  <li>Letti: <?php echo $dati_stanza['beds'] ?></li>
  <li>Creata il: <?php echo $dati_stanza['created_at'] ?></li>
  <li>Aggiornata il: <?php echo $dati_stanza['updated_at'] ?></li>
</ul>

<?php
}
?>
