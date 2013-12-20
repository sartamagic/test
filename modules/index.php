<?
class modules {
    public $alert = "Здравствуйте, вы наткнулись на модуль";

    function __construct(){
        echo "$this->alert";
    }
}

$ok = new modules();