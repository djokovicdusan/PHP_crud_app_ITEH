<?php
include "konekcija.php";


$utakmice = $db->vratiSveUtakmice();
/** @var Utakmica $utakmica */
foreach ($utakmice as $utakmica){
    ?>
    <option value="<?= $utakmica->getUtakmicaID() ?>"><?= $utakmica->getNazivUtakmice() ?></option>
<?php
}