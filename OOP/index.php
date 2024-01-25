//Create una nuova classe che rappresenti un Pokemon e che abbia almeno cinque proprieta, tre metodi ed il costruttore.
Microbonus: creo un'altra classe che aggiungo al pokemon per composizione che configuri il tipo di pokemon (aria, terra, ecc.)//



<?php
class Pokemon {
    public $name;
    public $type;
    public $level;
    public $point_life;
    public $experience;

public function __costruct($name, $type , $level , $point_life , $experience)
                    $this-> name = $name;
                    $this-> type = $type;
                    $this-> level = $level;
                    $this-> point_life = $point_life;
                    $this-> experience = $experience;
                    

}

//inserisco un altr metodo per il nome

public function getNome() {
    return $this->name;
}

//metto un altro metodo dove indicherò lo stato della salute di pokemon

public function setPuntiSalute($quantita) {
        if ($quantita > 0) {
            $this-> point_life = $quantita;
        }
}


//creo un esempio di un pokemon 

$pikachu = new Pokemon ("Pikachu", "Elettrico", 8,30,80)

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    
</body>
</html>