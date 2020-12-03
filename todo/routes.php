<?php

$router->get("todo", "controllers/index.php");
$router->get("todo/about", "controllers/about.php");
$router->get("todo/about/culture", "controllers/about-culture.php");
$router->get("todo/contact", "controllers/contact.php");
$router->post("todo/names", "controllers/add-name.php");