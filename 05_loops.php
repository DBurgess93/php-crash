<?php
  /*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for($x = 0; $x <= 10; $x++ ) {
//   echo 'Number ' . $x . '<br>';
// };

// $x = 1;
// while( $x <= 12) {
//   echo 'Number ' . $x . '<br>';
//   $x++;
// }

// $x = 0;
// do {
//   $x++;
//   echo 'Number ' . $x . '<br>';
// } while($x <= 5);

$words = ['yo', 'whats', 'up', 'cuz'];
foreach($words as $index => $word) {
  $index = $index + 1;
  echo "$index - $word <br>";
}

$person = [
  'first_name' => 'Dan',
  'last_name' => 'Burgess',
  'email' => 'dan@email.com'
];

foreach($person as $key => $value) {
  echo "$key - $value <br>";
};
