<?php $title = 'Creation de la table' ?>
<?php ob_start(); ?>

<div class="alert alert-success d-flex justify-content-center " role="alert">
  Le Tableau championDwwm2 a bien etait creer.
</div>

<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>