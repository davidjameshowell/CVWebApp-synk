<?php
  class Connection
  {
    private static $connection;
    private $mysqli;

    private function __construct
      (string $server, string $username, string $password,  string $database)
    {
      $this->mysqli = mysqli_connect($server, $username, $password, $database)
          or die('set your database configuration : ' . __DIR__ . "/bootstrap.php");
    }

    public static function getInstance 
      (string $server, string $username, string $password,  string $database)
    {
      if ( !isset($connection) ):
        $connection = new Connection($server, $username, $password, $database);
      endif;

      return $connection;
    }

    public function login (string $username, string $password)
    {
      $query = "SELECT *
        FROM `users`
        WHERE `username` = '$username'
        AND `password` = '$password'";

      $result = $this->mysqli->query($query);

      $user = null;

      if ( $result->num_rows !== 0 ):
        $user = mysqli_fetch_object($result);
      endif;

      return $user;
    }

    public function getPosts ()
    {
      $query = "SELECT `username`, `is_admin`, `content`, `created_at`
        FROM `users` U, `posts` P
        WHERE U.`id` = P.`user_id` order by P.`id` DESC";

      $result = $this->mysqli->query($query);
      $posts = [];
      while ( $row = mysqli_fetch_object($result) ):
        array_push($posts, $row);
      endwhile;

      return $posts;
    }

    public function storePost (int $user_id, string $content)
    {
      $query = "INSERT INTO `posts` (`user_id`, `content`)
        VALUES ($user_id, '$content')";
      $foo = $this->mysqli->query($query);
    }
  }
  
