<header>
    <nav id="headerNav">
        <?php if (isset($_SESSION['loggedInUser'])) { ?>
            <form method="POST" action="">
                <button type="submit" id="logoutHeaderButton" name="logoutButton" class="loginLogoutButton">Logout</button>
            </form>
        <?php } else { ?>
            <a href="02-Login.php">
                <button type="button" id="loginHeaderButton" class="loginLogoutButton">Login</button>
            </a>
        <?php } ?>
        <a id="headerNameLink" href="01-LandingPage.php">
            <div id="headerName">
                <h1>Safari Stop</h1>
            </div>
        </a>
    </nav>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7897 120">
        <rect x="108" width="7680" height="91" fill="#84542c"/>
        <g id="bottomWaves">
            <path id="pinkWave"
                  d="M0,77c54.84,0,54.84,14,109.68,14s54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.69-14,54.85,14,109.69,14,54.85-14,109.69-14"
                  fill="none" stroke="#e8d1ca" stroke-opacity="" stroke-miterlimit="10" stroke-width="6"/>
            <path id="greenWave"
                  d="M0,89.99c54.84,0,54.84,14,109.68,14s54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.68-14,54.84,14,109.68,14,54.84-14,109.69-14,54.85,14,109.69,14,54.85-14,109.69-14"
                  fill="none" stroke="#596a50" stroke-miterlimit="10" stroke-width="20"/>
        </g>
    </svg>
</header>