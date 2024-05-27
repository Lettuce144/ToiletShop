<?php
@require_once("auth/auth.php");
@require_once("login_popup.php");

if (!Auth\isloggedin()) {
    Auth\guest();
}
?>
<!-- Header here -->
<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <h1 class="logo">Toilet & Co</h1>
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="/"> Home </a>

            <a class="navbar-item"> Shop </a>

            <a class="navbar-item"> Contact </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link"> More </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item"> About </a>
                    <a class="navbar-item is-selected"> Jobs </a>
                    <a class="navbar-item"> Contact </a>
                    <hr class="navbar-divider" />
                    <a class="navbar-item"> Report an issue </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <p class="subtitle is-6">Hallo, <b><?= $_SESSION['user'] ?></b></p>
            </div>
            <div class="navbar-item">
                <form class="navbar-buttons" method="post" action="auth/auth_logout.php">
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5 4H19C19.5523 4 20 4.44771 20 5V19C20 19.5523 19.5523 20 19 20H5C4.44772 20 4 19.5523 4 19V5C4 4.44772 4.44771 4 5 4ZM2 5C2 3.34315 3.34315 2 5 2H19C20.6569 2 22 3.34315 22 5V19C22 20.6569 20.6569 22 19 22H5C3.34315 22 2 20.6569 2 19V5ZM12 12C9.23858 12 7 9.31371 7 6H9C9 8.56606 10.6691 10 12 10C13.3309 10 15 8.56606 15 6H17C17 9.31371 14.7614 12 12 12Z" fill="currentColor" />
                                </svg>
                            </button>
                        </div>
                        <div class="control">
                            <?php if (!Auth\isloggedin()) { ?>
                                <a id="login-button" class="button is-light"> Login </a>
                            <?php } else { ?>
                                <button id="logout-button" type="submit" class="button is-light"> Logout </>
                                <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</nav>

<script src="js/toggle-login.js"></script>