<?php
include "konekcija.php";
//single responsibility

$sportovi = $baza->vratiSveSportove();
/** @var Sport $sport */
foreach ($sportovi as $sport){
    ?>
    <option value="<?= $sport->getSportID() ?>"><?= $sport->getNazivSporta() ?></option>
<?php
}