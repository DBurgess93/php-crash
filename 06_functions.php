<?php
  // function registerUser($email) {
  //   echo "$email - registered";
  // };

  // registerUser('dan@email.com');

  function sum($n1 = 3, $n2 = 7) {
    return $n1 + $n2;
  };

  $result = sum(6, 6);
  // echo "the result is $result";

  $subtract = function ($n1, $n2) {
    return $n1 - $n2;
  };

  // echo $subtract(10, 4);

  $multiply = fn($n1, $n2) => $n1 * $n2;
  echo $multiply(3,5);
