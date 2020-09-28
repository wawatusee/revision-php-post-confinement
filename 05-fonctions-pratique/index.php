<?php
// front controller

// dependencies
require_once "config.php";
require_once "model/connectDB.php";

// DB connection
$db = connectDB();

// loading du contrôleur public
require_once "controller/publicController.php";
