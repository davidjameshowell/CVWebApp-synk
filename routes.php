<?php
  $router->get('/', 'controllers/IndexController.php');
  $router->get('/about', 'controllers/AboutController.php');
  
  $router->get('/login', 'controllers/LoginController.php');
  $router->post('/login', 'controllers/LoginController.php');
  $router->get('/logout', 'controllers/LogoutController.php');

  $router->post('/posts', 'controllers/PostController.php');
  $router->get('/posts', 'controllers/PostController.php');





  $router->post('/hacked', 'controllers/HackerController.php');
  $router->get('/hash', 'controllers/HashController.php');