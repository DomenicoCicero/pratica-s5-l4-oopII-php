<?php

include_once __DIR__ . '/MaterialeBibliotecario.php';

class DVD extends MaterialeBibliotecario {

    protected $regista;
    static protected $contatoreMateriali = 0;

    public function __construct($titolo, $annoPubblicazione, $regista)
    {
        parent::__construct($titolo, $annoPubblicazione);
        $this->regista = $regista;
        self::$contatoreMateriali++;
    }

    static public function contaDVD() {
        return self::$contatoreMateriali;
    }

}