<?php $title = 'Maj' ?>
<?php ob_start();
$updo = new bdd;
$updo->updateOne(); ?>
<div class="alert alert-success" role="alert">
    Vieillissement d'une annee d'un champion aleatoire reusi .
</div>


<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>