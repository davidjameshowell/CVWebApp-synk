<?php
  if ( isset($_SESSION['user']) ):
    exit(header('Location: /'));
  endif;
?>
<div class="hero is-dark is-fullheight has-text-centered" style="justify-content: center;align-items: center;">
  <div class="hero-body" style="width: 35%">
    <div class="container">
      <h1 class="title">Login</h1>
      <form action="/login" method="POST" onsubmit="return validateLogin()">
        <div class="field">
          <p class="control has-icons-left">
            <input class="input" type="text" name="username" placeholder="Username" value="<?= isset($_COOKIE['username']) ? $_COOKIE['username'] : '' ?>" autofocus>
            <span class="icon is-small is-left">
              <i class="fas fa-user"></i>
            </span>
          </p>
        </div>
        <div class="field">
          <p class="control has-icons-left">
            <input class="input" type="password" name="password" placeholder="Password">
            <span class="icon is-small is-left">
              <i class="fas fa-lock"></i>
            </span>
          </p>
        </div>
        <div class="field">
          <p class="control">
            <input class="button is-fullwidth" type="submit" name="login" value="Login">
          </p>
        </div>
        <div class="field is-grouped is-grouped-centered has-text-danger">
          <p class="control" id="error-message">
            <?= isset($_GET['err']) ? 'Wrong Username / Password' : '&nbsp;' ?>
          </p>
        </div>
      </form>
    </div>
  </div>
</div>
