<?php
class Dipendente {
    use Stipendio;
    public $nome;
    public $cognome;
    public $matricola;
    public $anni;

    function __construct($_nome,$_cognome,$_matricola,$_anni=18){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->matricola = $_matricola;
        $this->anni = $_anni;
    }

    public function stampa_dipendente(){
        echo "<p>".$this->matricola."-".$this->cognome." ".$this->nome."</p>";
    }
}
 ?>
