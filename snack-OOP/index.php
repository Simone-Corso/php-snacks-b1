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

         public function __construct($nome, $cognome, $età){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->età = $età;

         }

         /**
          * poi inserisco il Getetà
          */

          public function getEtà() {
            return $this->età;
          }

          public function setEtà($nuovaEtà) {
            if (!is_int($nuovaEtà)) {
                throw new InvalidArgumentException("l'ètà dovrà essere un numero intero");
            }
    
            $this->età = $nuovaEtà;
    }
}

/**
 * ho inserito il try con un massimo di 30
 * Seconda parte
 */
try {
    $persona = new Persona("Giacomo", "Infrarossi", 30);
    echo $persona->getEtà();

   //inserisco in caso l'età non è valida
    $persona->setEtà("non è un numero valido");
} catch (InvalidArgumentException $e) {
    echo "c'è un Errore: " . $e->getMessage();
}

?>

