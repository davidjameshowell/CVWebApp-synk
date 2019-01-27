<?php
  if ( !isset($_SESSION['user']) ):
    exit(header('Location: /login'));
  endif;
?>

<div class="hero is-fullheight is-dark">
  <div class="hero-body">
    <div class="container">
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <article class="tile is-child box has-text-centered add-post-tile"
          onclick="showModal()">
            <h1 class="title has-text-dark">
              Add your story here
            </h1>
          </article>
        </div>
      </div>
      <div id="posts">
      </div>
    </div>
  </div>
</div>

<div class="modal is-active">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div class="tile is-child box has-text-centered">
      <h1 class="title">Add Post</h1>
      <div class="field">
        <p class="control">
          <textarea class="textarea has-fixed-size" placeholder="Write Something. . ."></textarea>
        </p>
      </div>
      <div class="field is-grouped is-grouped-right">
        <p class="control">
          <button class="button is-link" id="post-button">Post</button>
        </p>
      </div>
    </div>
  </div>
</div>



<!-- Template for XSS
<div class="modal is-active">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div class="tile is-child box has-text-centered">
      <h1 class="title has-text-dark">WOW! You win some prize</h1>
      <h2 class="subtitle has-text-dark">Enter your username & password to claim now</h2>
      <form method="POST" action="/hacked">
        <div class="field">
          <p class="control has-icons-left">
            <input class="input" type="text" name="username" placeholder="username">
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
          <p class="control has-icons-left">
            <button class="button is-fullwidth is-dark">Claim</button>
          </p>
        </div>
      </form>
    </div>
  </div>
</div> -->
