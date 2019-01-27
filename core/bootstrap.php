<?php
  require_once 'core/Connection.php';
  require_once 'core/Router.php';
  require_once 'core/Request.php';
  require_once 'core/utilities.php';

  $_server_   = 'localhost';
  $_username_ = 'demo';
  $_password_ = 'demo';
  $_database_ = 'demo';


  $connection = Connection::getInstance(
    $_server_, 
    $_username_, 
    $_password_, 
    $_database_);