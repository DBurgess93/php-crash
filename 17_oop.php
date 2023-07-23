<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented
  way. OOP consists of classes that can hold "properties" and "methods".
  Objects can be created from classes.
*/

class User
{
  // Properties are just variables that belong to a class.
  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes

  public $name;
  public $email;
  public $password;

  // Constructor is a method that runs when an object is created
  public function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  // Method is a function that belongs to a class

  // Setter
  function set_name($name)
  {
    $this->name = $name;
  }
  // Getter
  function get_name()
  {
    return $this->name;
  }

  function greeting()
  {
    echo "Hello ", $this->name;
  }
}

// Create new instance of a user object (Instantiate)
$user1 = new User('Dan', 'dan@email.com', '1234');
$user2 = new User('Terry', 'terry@email.com', '4321');

// echo $user1->email;
// echo $user2->email;


// $user1->set_name('Dan');
// echo $user1->get_name();
// $user2->set_name('Terry');
// echo $user2->get_name();
// // var_dump($user1->name);
// $user2->greeting();


// Inheritance using extends
class Employee extends User
{
  public function __construct(
    $name,
    $email,
    $password,
    $title
  ) {
    // Run the constructor from the parent class
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }
  public function get_title()
  {
    return $this->title;
  }
}

$employee1 = new Employee('Joan', 'joan@email.com', '43234', 'Manager');
echo $employee1->get_title();
