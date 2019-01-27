<?php
  if ( Request::isMethod('GET')):
    header('content-type: application/json');
    echo json_encode($connection->getPosts());
  elseif ( Request::isMethod('POST')):
    $connection->storePost($_POST['user_id'], $_POST['content']);
  endif;