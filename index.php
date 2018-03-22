<?php
session_start();
include 'bootstrap/Psr4AutoLoad.php';
include 'bootstrap/Start.php';
include 'bootstrap/alias.php';

//添加映射关系的
$config = include 'config/config.php';
Start::route();