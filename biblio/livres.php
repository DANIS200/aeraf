<?php 

require_once "LivreManager.class.php";
$livreManager = new LivreManager;
$livreManager->chargementLivres();

ob_start(); 
?>

<table class="table text-center" style="border: 1px solid black;flex-wrap:wrap;">
    <tr class="table-dark">
        <th>ID</th>
        <th>Profil</th>
        <th>Nom_et_Prenoms</th>
        <th>Sexe</th>
        <th >Date_Adhesion</th>
        <th>Contact</th>
        <th>Promotion</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php 
    $livres = $livreManager->getLivres();
    for($i=0; $i < count($livres);$i++) : 
    ?>
    <tr style="font-size: 12px;">
        <td class="align-middle"><?= $livres[$i]->getId(); ?></td>
        <td class="align-middle"><img src="public/images/<?= $livres[$i]->getProfil(); ?>" width="30px;"></td>
        <td class="align-middle"><?= $livres[$i]->getNom_et_Prenoms(); ?></td>
        <td class="align-middle"><?= $livres[$i]->getSexe(); ?></td>
        <td class="align-middle"><?= $livres[$i]->getDate_Adhesion(); ?></td>
        <td class="align-middle"><?= $livres[$i]->getContact(); ?></td>
        <td class="align-middle"><?= $livres[$i]->getPromotion(); ?></td>
        <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    <?php endfor; ?>
</table>
<a href="" class="btn btn-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "Les livres de la bibliothèque";
require "template.php";
?>