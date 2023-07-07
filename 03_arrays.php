<?php
  $numbers = [1,54,69,23];
  $fruits = ['apple', 'orange', 'pear', 'grape'];

  //var_dump($numbers);
  //var_dump($numbers[2]);
  //echo $fruits[1];

  // Assiciative Arrays
  $hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
  ];

  //echo $hex['red'];

  $person = [
    'first_name' => 'Dan',
    'last_name' => 'Burgess',
    'email' => 'dan@hotmail.com'
  ];

  //echo $person['first_name'], ' ', $person['last_name'], ' email is ', $person['email'];

  $people = [
    [
      'first_name' => 'Daniel',
      'last_name' => 'Burgess',
      'email' => 'dan@hotmail.com'
    ],
    [
      'first_name' => 'Terry',
      'last_name' => 'Smithle',
      'email' => 'terry@hotmail.com'
    ],
    [
      'first_name' => 'Wonky',
      'last_name' => 'Plonky',
      'email' => 'wonky@hotmail.com'
    ]
  ];

  //echo $people[1]['email'];

  var_dump(json_encode($people));
