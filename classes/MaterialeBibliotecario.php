<?php

include_once __DIR__ . '/../interfaces/Prestito.php';

abstract class MaterialeBibliotecario implements Prestito {

    static protected $contatoreMateriali = 0;
    protected $titolo;
    protected $annoPubblicazione;

    public function __construct($titolo, $annoPubblicazione)
    {
        $this->titolo = $titolo;
        $this->annoPubblicazione = $annoPubblicazione;
        //self:: indica la classe in cui è scritto il codice
        self::$contatoreMateriali++;

    }

    public function presta() {
        self::$contatoreMateriali--;
        //static:: indica la classe dalla quale è stata effettuata la chiamata
        static::$contatoreMateriali--;
    }

    public function restituisci() {
        self::$contatoreMateriali++;
        static::$contatoreMateriali++;
    }

    static public function contaMateriali() {
        return self::$contatoreMateriali;
    }
}