<?php

/**
 * Creare un nuovo oggetto Persona con un metodo setAge() che cambia il valore della proprieta' age della classe Persona, che accetti esclusivamente un numero intero. 
 * Se il numero inserito come argomento non dovesse essere un numero intero: allora lanciare un'eccezione!
 */


 /**
  * creiamo la classe per la persona
  */

    class Persona {
        public $nome;
        public $cognome;
        public $età;

        /**
         * qua invece inseriamo la funxione construct
         */

         public function __construct($nome, $cognome, $età)
    }