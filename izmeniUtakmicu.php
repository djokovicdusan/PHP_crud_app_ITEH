<?php
include 'konekcija.php';

$utakmicaID = strip_tags($_POST['utakmicaID']);
$komentar = strip_tags($_POST['komentar']);
$cenaKarte = strip_tags($_POST['cenaKarte']);
//proveriti putanju do biblioteke!!!

$izmenjeno = $db->izmeniUtakmicu($utakmicaID,$komentar,$cenaKarte);

if($izmenjeno){
    ?>
    <div class="alert alert-success" role="alert">
        Uspešno izmenjena utakmica!
    </div>
<?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
        Neuspešno izmenjena utakmica!
    </div>
<?php
}