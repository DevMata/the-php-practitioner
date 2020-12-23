<?php

// I needed to resolve this path, I couldn't use relative path
App::bind('config', require dirname(dirname(__FILE__))."/config.php");
App::bind("database", new QueryBuilder(Connection::make(App::get("config")["database"])));