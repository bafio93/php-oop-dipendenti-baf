<?php
//
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Creo struttura di base:
// Creo oggetto dipendente:

include_once "traits/Stipendio.php";
include_once "Dipendente.php";
include_once "Operaio.php";
include_once "Manager.php";

//
$persona_1 = new Operaio("Mario","Rossi","MR001","Primo Turno",57);
//
$persona_2 = new Manager("Luigi","Verdi","LV002","Contabilità");
// //
echo "<pre>";
var_dump($persona_1);
var_dump($persona_2);
echo "</pre>";
// $persona_1->stampa_dipendente();
// //
// $persona_1->paga_oraria = 7;
// try {
//     $stipendio_mese_1 = $persona_1->calcola_stipendio(160);
//     echo "<p> Stipendio guadagnato da:".$persona_1->nome." ".$persona_1->cognome.": ".$stipendio_mese_1.".</p>";
// } catch (\Exception $e) {
//     echo "<h1>".$e->getMessage()."</h1>";
// }
//
// //
// $persona_2->stampa_dipendente();
// //
// $persona_2->paga_oraria = 10;
// $persona_2->bonus = 500;
// try {
//     $stipendio_mese_2 = $persona_2->calcola_stipendio(160);
//     echo "<p> Stipendio guadagnato da:".$persona_2->nome." ".$persona_2->cognome.": ".$stipendio_mese_2.".</p>";
// } catch (\Exception $e) {
//     echo "<h1>".$e->getMessage()."</h1>";
// }

 ?>
