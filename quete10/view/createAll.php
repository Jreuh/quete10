<?php $title = 'hydratation de la table';
ob_start();
$createAll = new bdd;
$createAll->createAll(); ?>

<div class="alert alert-success d-flex justify-content-center" role="alert">
    Le Tableau championDwwm2 a bien etait hydrater.
</div>


<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>