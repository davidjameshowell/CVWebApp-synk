<?php
  session_start();
  $title = 'CVWebApp Login';
  
  if ( Request::isMethod('GET') ):
    require_once "views/layouts/header.php";
    require_once "views/login.php";
    require_once "views/layouts/footer.php";
  elseif ( Request::isMethod('POST') ):
    $user = $connection->login($_POST['username'], $_POST['password']);
    if ( $user !== null ):
      $_SESSION['user'] = $user;
      setcookie('id', $user->id, time()+3600*24);
      setcookie('username', $user->username, time()+3600*24);
      exit(header('Location: /'));
    endif;
    exit(header('Location: /login?err=1'));
  endif;