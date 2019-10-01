<?php 
    class Fruit{
        private $name;
        protected $color;
        private $weight;
        function __construct(){
            $this->name='Apple';
        }
        function set_name($n){
            $this->name=$n;
        }
        function get_name(){
            return $this->name;
        }
        function set_weight($w){
            $this->weight=$w;
        }
        function get_weight(){
            return $this->weight;
        }
    }
    class RedApple extends Fruit{
        function __construct(){
            parent::__construct();
            $this->color='red';
            
        }
    }
    $apple=new RedApple();
    $apple->set_weight('5kg');
    var_dump($apple);
?>