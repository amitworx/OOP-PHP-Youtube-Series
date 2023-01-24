<?php

trait Logger{
    public function log($message){
        echo "[". date("Y-m-d H:i:s")."] ".$message . "\n";
    }
}


class User{
    use Logger;

    public function register(){
        $this->log("User registered");
    }
}

class Order{
    use Logger;

    public function create(){
        $this->log("Order created");
    }
}

$user = new User();
$user->register();

$order = new Order();
$order->create();