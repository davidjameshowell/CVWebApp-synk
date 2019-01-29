<div class="hero is-dark is-fullheight has-text-centered" style="justify-content: center;align-items: center;">
  <div class="hero-body" style="width: 35%">
    <div class="container">
      <h1 class="title">Bcrypt</h1>
      <form>
        <div class="field">
          <p class="control has-icons-left">
            <input class="input" type="text" name="plain" placeholder="Plain Text" autofocus>
            <span class="icon is-small is-left">
              <i class="fas fa-lock"></i>
            </span>
          </p>
        </div>
        <div class="field">
          <p class="control">
            <input class="button is-fullwidth" type="submit" name="hash" value="Hash!">
          </p>
        </div>
          <?php
            if ( isset($_GET['hash']) ):
              echo "<script>alert('".bcrypt($_GET[plain])."')</script>";
            endif;
          ?>
      </form>
    </div>
  </div>
</div>
