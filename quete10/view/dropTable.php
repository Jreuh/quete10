<?php $title = 'Suppression de la table';
ob_start();
$drop = new bdd;
$drop->dropTable(); ?>


<div class="alert alert-success d-flex justify-content-center" role="alert">
    Le Tableau championDwwm2 a bien etait supprime.
</div>

<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>