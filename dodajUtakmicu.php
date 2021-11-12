<?php
include 'konekcija.php';

$nazivUtakmice = strip_tags($_POST['nazivUtakmice']);
$komentar = strip_tags($_POST['komentar']);
$sport =  strip_tags($_POST['sport']);
$cenaKarte = strip_tags($_POST['cenaKarte']);
//proveriti putanju do biblioteke!!!


$utakmica = new Utakmica(null,$nazivUtakmice, $komentar, new Sport($sport,null), $cenaKarte, null);
$sacuvano = $db->dodajUtakmicu($utakmica);

if($sacuvano){
    ?>
    <div class="alert alert-success" role="alert">
        Uspešno unesena utakmica!
    </div>
<?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
        Neuspešno unesena utakmica!
    </div>
<?php
}