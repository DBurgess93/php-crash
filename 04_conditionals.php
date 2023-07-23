<?php
  $age = 20;

  // if($age >= 18) {
  //   echo 'You are old enough to vote';
  // } else {
  //   echo 'You are NOT old enough to vote';
  // };

  $t = date("H");

  // if($t < 12) {
  //   echo 'Good Morning';
  // } elseif($t > 17) {
  //   echo 'Good Evening';
  // } else {
  //   echo 'Good Afternoon';
  // }

  $posts = ['First Post'];

  // if(!empty($posts)) {
  //   echo $posts[0];
  // } else {
  //   echo 'No Posts';
  // }

  // $firstPost = (!empty($posts)) ? $posts[0] : 'No Posts';
  // $firstPost = $posts[0] ?? null;
  // echo $firstPost;

  $favColor = 'orange';

  switch($favColor) {
    case('red'):
      echo 'Your fav color is red';
      break;
    case('blue'):
      echo 'Your fav color is blue';
      break;
    case('green');
      echo 'Your fav color is green';
      break;
      default:
      echo 'your fav color is not red, blue or green';
  };
