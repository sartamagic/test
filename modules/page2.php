<?
class modules3 {
    public $alert3 = "Здесь живет третий модуль";

    function __construct(){
        echo "$this->alert3";
    }
}

$ok3 = new modules3();