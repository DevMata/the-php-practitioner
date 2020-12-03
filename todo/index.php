<?php

require 'core/Request.php';
$database = require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri(),Request::method());