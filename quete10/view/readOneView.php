<?php $title = 'Champion' ?>
<?php ob_start();
$readOne = new bdd;
$readOne->readOne();

?>
<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>