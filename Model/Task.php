<?php

class Task{
    public $title;    
    public $price;
    public $quantity;   
    public function __construct($title, $price,$quantity)    
    {    
        $this->title = $title;  
        $this->price = $price;  
        $this->quantity = $quantity;   
    } 
}

