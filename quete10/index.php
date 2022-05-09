<?php
require 'controllers/controller.php';
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'cTable') {
        $create = new bdd;
        $create->createTable();
    }
    if ($_GET['action'] == 'rTable') {
        read();
    }
    if ($_GET['action'] == 'tTable') {
        deleteTable();
    }
    if ($_GET['action'] == 'dTable') {
        dropTable();
    }
    if ($_GET['action'] == 'cAll') {
        creatAll();
    }
    if ($_GET['action'] == 'rOne') {
        reado();
    }
    if ($_GET['action'] == 'updO') {
        upd();
    }
    if ($_GET['action'] == 'delO') {
        delO();
    }
    if ($_GET['action'] == 'list') {
        listold();
    }
    
} else {
    home();
}
