<?php
  $fruits = ['apples', 'bananas', 'lemons'];

  // echo count($fruits);

  // var_dump(in_array('apples', $fruits));


// add to array
  $fruits[] = 'berry';
  array_push($fruits, 'mango');
  array_unshift($fruits, 'watermelon');


  // remove form array
  array_pop($fruits);
  array_shift($fruits);
  // unset($fruits[2]);

  $chunked_array = array_chunk($fruits, 3);

  // print_r($chunked_array);

//merge arrays

  $arr1 = [1,2,3];
  $arr2 = ['yo', 'my', 'guy'];
  $cuz = ['blip', 'blop', 'bloop'];

  $arr3 = array_merge($arr1, $arr2);

  $arr4 = [...$arr1, ...$arr2, ...$cuz];
  // print_r($arr4);

  $c = ['green', 'red', 'yellow'];
  $v = ['broccoli', 'capsicum', 'squash'];

  $combined = array_combine($c, $v);
  // print_r($combined);

  $flipped = array_flip($combined);
  // print_r($flipped);

  $numbers = range(1, 76);
  $new_numbers = array_map(function($number) {
    return "Number $number";
  }, $numbers);
  // print_r($new_numbers);

  $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

  // print_r($lessThan10);

  $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number );

  var_dump($sum);
