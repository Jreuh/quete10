<?php
require('models/model.php');
function home()
{
    require 'view/indexView.php';
}
function read(){
    require 'view/readTableView.php';
}
function deleteTable(){
    require 'view/emptyTable.php';
}
function dropTable(){
    require 'view/dropTable.php';
}
function creatAll(){
    require 'view/createAll.php';
}
function reado(){
    require 'view/readOneView.php';
}
function upd(){
    require 'view/updateOneView.php';
}
function delO(){
    require 'view/deleteOne.php';
}
function listold(){
    require 'view/listView.php';
}