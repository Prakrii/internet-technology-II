<?php
class User {
    public $name;
    public $email;

    // Constructor
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }
}

// Instantiate the object
$user = new User("John Chamling", "john@gmail.com");

// Display the values
echo "Name: " . $user->name . "<br>";
echo "Email: " . $user->email;
?>