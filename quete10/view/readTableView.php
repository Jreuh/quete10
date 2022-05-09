<?php $title = 'Lecture de la table' ; ob_start(); 
$read= new bdd;
$read->readTable();?>




<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>