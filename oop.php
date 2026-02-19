<?php

class User{
    public $userName = "Aung Pyae Hein";

    public $number = [1,2,3,4,5];
    
    public function user(){
        echo "I'm User";
    }

    protected $name,$age,$address = 'Yangon';

    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function getter()
    {
        return "i live in $this->address";
    }

    public function setter($address)
    {
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name.'('.$this->age.')';
    }
}

    $user = new User("Aung Pyae Hein",23);

    echo "<pre>";

    print_r($user);

    print_r($user->number);

    foreach($user->number as $item){
        print_r($item."<br>");
    }

    // $user->name = "Luis";

    print_r($user->getter());

    echo "<br>";

    print_r($user->getName());

    echo "<br>";

    $user->setter('Mandalay');

    print_r($user->getter());

