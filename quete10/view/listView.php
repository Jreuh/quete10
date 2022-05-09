<?php $title = 'order' ?>
<?php ob_start();
$order = new bdd;
$order->listage() ?>


<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>