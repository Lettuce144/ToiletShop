<?php

?>

<!-- Make a html login popup -->

<form method="post" action="auth/auth_login.php" id="login-popup" class="login-popup hidden container is-max-desktop box">
        <div class="field">
          <label class="label">Email</label>
          <div class="control">
            <input class="input" type="email" name="email" placeholder="e.g. alex@example.com" />
          </div>
        </div>

        <div class="field">
          <label class="label">Password</label>
          <div class="control">
            <input class="input" type="password" name="password" placeholder="********" />
          </div>
        </div>

        <div class="field is-grouped">
          <label for="" class="checkbox is-expanded">
            <input type="checkbox">
            Remember me
          </label>
          <a class="help" href="./login.php">No account? Sign up here</a>
        </div>

        <div class="field">
          <button type="submit" class="button is-primary">Sign in</button>
        </div>
</form>
