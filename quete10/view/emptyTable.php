<?php $title = 'Vidage du tableau ' ?>
<?php ob_start(); $truncatetable= new bdd;
$truncatetable->deleteAll();?>

<div class="alert alert-success d-flex justify-content-center" role="alert">
  Le Tableau championDwwm2 a bien etait vide.
</div>

<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>