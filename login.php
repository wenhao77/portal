<?php
  //Prints out the inputted username and password.
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Prints out list of existing algos.
  //print_r(hash_algos());

  // Stores the array of all the algos in a variable.
  $algos = hash_algos();

  // Counts the amount of elements in the array.
  $count = count($algos);

  // Picks a random index number for the use of a hash conversion.
  $id = rand(0, $count - 1);

  // Gives the element thats associated with the index number.
  $algo = $algos[$id];

  // Stores the array of the first 6 letters in the alphabet in a variable.
  $separators = ['a', 'b', 'c', 'd', 'e', 'f'];

  // Picks a random index number for the use of id identification.
  $separator_id = rand(0, count($separators) - 1);

  // Gives the element thats associated with the index number.
  $separator = $separators[$separator_id];

  echo "User name: $username<br>\n";
  echo "Password: $password<br>\n";

  // hash('sha256', ...) converts the hash again.
  // $id says what algo index is used.
  // $separator makes it so that you can identify what part of the hash is the ID...
  // ...and what part is the actual hash.
  // hash($algo, $password) converts the password to hash.
  $password = hash('sha256', $id . $separator . hash($algo, $password));

  // Prints the hashed password.
  echo "Hashed: $password<br>\n";
?>
