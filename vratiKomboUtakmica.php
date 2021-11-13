<?php
include "konekcija.php";

//SINGLGE RESPONSIBILITY
$utakmice = $db->vratiSveUtakmice();
/** @var Utakmica $utakmica */
foreach ($utakmice as $utakmica){
    ?>
    <option value="<?= $utakmica->getUtakmicaID() ?>"><?= $utakmica->getNazivUtakmice() ?></option>
<?php
}