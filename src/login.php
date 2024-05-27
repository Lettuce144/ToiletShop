<?php
@require_once("components/headerbar.php");
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>De toilet shop</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"
    />
    <!-- JSDelivr -->
    <link
    href="https://cdn.jsdelivr.net/npm/css.gg/icons/icons.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="css/bulma-custom.css" />
    
  </head>
  <body>
    <!-- Main content here -->
    <main id="main">
      <section class="section box">
        <div class="box">
          <form method="post" action="./auth/auth_register.php" id="register-form">
            <div class="field">

              <label class="label" for="email">Email</label>
              <div class="control has-icons-left">
                <input
                  class="input"
                  type="email"
                  placeholder="Email"
                  name="email"
                /><span class="icon is-left"
                  ><i class="gg-inpicture"></i></span
                >
              </div>
              <div class="columns row-one">
                <div class="column">
                  <label class="label" for="firstName">First Name</label>
                  <div class="control">
                    <input
                      class="input"
                      type="text"
                      placeholder="First Name"
                      name="firstName"
                    />
                  </div>
                </div>
                <div class="column">
                  <label class="label" for="lastName">Last Name</label>
                  <div class="control">
                    <input
                      class="input"
                      type="text"
                      placeholder="Last Name"
                      name="lastName"
                    />
                  </div>
                </div>
              </div>
              <label class="label" for="username">Address</label>
              <div class="control has-icons-left">
                <input
                  class="input"
                  type="text"
                  placeholder="123 Main St, City, State, Zip Code"
                  name="username"
                /><span class="icon is-left"><i class="gg-pin"></i></span>
              </div>
              <div class="columns">
                <div class="column">
                  <label class="label" for="password">Password</label>
                  <div class="control has-icons-left">
                    <input
                      class="input"
                      type="password"
                      placeholder="Password"
                      name="password"
                    /><span class="icon is-left"><i class="gg-key"></i></span>
                  </div>
                </div>
                <div class="column">
                  <label class="label" for="retypePassword"
                    >Re-Type Password</label
                  >
                  <div class="control has-icons-left">
                    <input
                      class="input"
                      type="password"
                      placeholder="Confirm Password"
                      name="repass"
                    /><span class="icon is-left"><i class="gg-lock"></i></span>
                  </div>
                </div>
              </div>
              <div class="field is-grouped">
                <div class="control">
                  <button class="button is-primary" type="submit">
                    Register
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </section>
    </main>

    <?php @require_once("components/footer.php");?>

    <script src="js/bulma.js"></script>
    <!-- Footer here -->
  </body>

  <style>
    .is-fixed-top{
      position: static !important;
    }
  </style>
</html>
