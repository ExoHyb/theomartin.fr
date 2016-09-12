<?php
/*
include_once 'userManager.php';

$um = new userManager();
$um->create('username', 'password', 'email');
echo '<br>';
$um->delete(1);
echo '<br>';
$um->update(1, 'test1');
echo '<br>';
$um->getInfo(1);

*/
include_once 'blogManager.php';

$bm = new blogManager();
$bm->getPosts();