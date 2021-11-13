<?php
include 'konekcija.php';

$utakmice = $db->vratiUtakmicePoPretrazi($_POST['pretraga'],$_POST['sort']);
?>
<table class="table table-hover" >
    <thead>
    <tr>
        <th style="color:beige" >Naziv utakmice</th>
        <th style="color:beige" >Komentar</th>
        <th style="color:beige" >Sport</th>
        <th style="color:beige" >Cena karte</th>
        <th style="color:beige" >Obriši</th>
    </tr>
    </thead>
    <tbody>

    <?php
    /** @var Utakmica $utakmica */
    foreach ($utakmice as $utakmica){
        ?>
        <tr>
            <td style="color:beige" ><?= $utakmica->getNazivUtakmice(); ?></td>
            <td style="color:beige" ><?= $utakmica->getKomentar(); ?></td>
            <td style="color:beige" ><?= $utakmica->getSport()->getNazivSporta(); ?></td>
            <td style="color:beige" ><?= $utakmica->getCenaKarte(); ?></td>
            
            <td><button class="btn btn-primary" style="background-color:  rgb(204, 100, 100);" onclick="obrisi(<?= $utakmica->getUtakmicaID(); ?>)"><i class="fa fa-trash"></i> Obriši</button> </td>
        </tr>

        <?php
    }
    ?>
    </tbody>
</table>
