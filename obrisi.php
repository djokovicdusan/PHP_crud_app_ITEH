<?php
include 'konekcija.php';
// OPERATION NOTIFICATION...

$id = $_GET['id'];

$obrisano = $db->obrisiUtakmicu($id);

if($obrisano){
    ?>
    <div class="alert alert-success" role="alert">
        Uspešno obrisana utakmica!
    </div>
    <?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
        Neuspešno obrisana utakmica!
    </div>
    <?php
}