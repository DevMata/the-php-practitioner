<?php

$router->get("todo", "PagesController@home");
$router->get("todo/about", "PagesController@about");
$router->get("todo/contact", "PagesController@contact");

$router->get("todo/users", "UsersController@index");
$router->post("todo/users", "UsersController@store");