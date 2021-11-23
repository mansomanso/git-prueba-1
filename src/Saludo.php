<?php

class Saludo {
    private $saludo;
    function __construct($nombre)
    {
        $this->saludo = "Hola $nombre";
    }
    function saludar() {
        echo $this->saludo;
    }
}