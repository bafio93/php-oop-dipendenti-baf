<?php
class Operaio extends Dipendente {

    public $turno;

    function __construct($_nome,$_cognome,$_matricola,$_turno,$_anni){
        parent::__construct($_nome,$_cognome,$_matricola,$_anni);
        $this->turno = $_turno;
    }

}
 ?>
