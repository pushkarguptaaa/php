
<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User{
    public $name;
    public $email;
    public $password;

    public  function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}
$user1 = new User('Pushkar','pushkar@gmail.com','uigi');
$user2 = new User('Push','push@gmail.com','ugi');

// $user1->name = 'Pushkar';
// $user1->set_name('Pushkar');
// $user2->set_name('Push');
// var_dump($user2);
// echo $user1->name;
// echo $user1->get_name();
// echo $user2->get_name();
// echo $user1->email;
// echo $user2->name;

class Employee extends User{
    public function __construct($name,$email,$password,$title)
    {
        parent::__construct($name,$email,$password);
        $this->title = $title;
    }

    public function get_title(){
        return $this->title;
    }
}
$employee1 = new Employee('Raj','raj@gmail.com','ugui','Manager');
echo $employee1->get_title();