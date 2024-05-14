<?php

include_once __DIR__ . '/MaterialeBibliotecario.php';

class Libro extends MaterialeBibliotecario {

    protected $autore;
    static protected $contatoreMateriali = 0;

    public function __construct($titolo, $annoPubblicazione, $autore)
    {
        parent::__construct($titolo, $annoPubblicazione);
        $this->autore = $autore;
        self::$contatoreMateriali++;
    }

    static public function contaLibri() {
        return self::$contatoreMateriali;
    }

}