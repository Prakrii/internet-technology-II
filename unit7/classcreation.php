<?php
class User{
    public $name = "user";
    public $email = "email";
    public function showName($name){
        $this->name = $name;
        echo "hello ".$name."<br>";
        echo "your new email is ".strtolower($name)."@gmail.com <br>";
    }
    public function showEmail($email){
        $this->email = $email;
        echo "your old email was ".$email;
    }
}
$user1 = new User();
$user1->showName("Ram");
$user1->showEmail("rambahadur777@gmail.com");

?>