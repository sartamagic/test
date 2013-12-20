<?
class modules2 {
    public $alert2 = "А вот тут второй модуль";

    function __construct(){
        echo "$this->alert2";
    }
}

$ok2 = new modules2();