<?php
include "konekcija.php";

$sportovi = $baza->vratiSveSportove();
/** @var Sport $sport */
foreach ($sportovi as $sport){
    ?>
    <option value="<?= $sport->getSportID() ?>"><?= $sport->getNazivSporta() ?></option>
<?php
}