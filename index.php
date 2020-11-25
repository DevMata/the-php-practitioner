<?php

$queryBuilder = require 'bootstrap.php';
$tasks = $queryBuilder->selectAll("todos");

require 'index.view.php';