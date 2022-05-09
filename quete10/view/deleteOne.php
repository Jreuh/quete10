<?php $title = 'Supression' ?>
<?php ob_start(); 
$del= new bdd;
$del->deleteOne();?>
<div class="alert alert-success d-flex justify-content-center" role="alert">
    Suppression aleatoire d'un champion reussi !
</div>


<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>