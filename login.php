<?php
require_once ("templates/head.php");
require_once ("templates/nav.php");
?>

<!-- Login -->
<section id="login">
    <img src="img/beers.jpg" alt="beers" title="beers" id="beers">
    <div id="inside">
        <h3>Bejelentkezés</h3>
        <form action="includes/login.inc.php" method="post">
        <div class="form-outline form-white mb-4">
            <label class="form-label" for="loginfelnev">Felhasználónév:</label>
            <input type="text" id="loginfelnev" name="felnev" class="form-control form-control-lg" required/>
        </div>
        <div class="form-outline form-white mb-4">
            <label class="form-label" for="loginpassword">Jelszó:</label>
            <input type="password" id="loginpassword" name="jelszo" class="form-control form-control-lg" required/>
        </div>
        <div class="mb-5 ms-3">
            <input type="checkbox" name="check" id="check" class="form-check-input" checked>
            <label for="check"><span class="icon"></span>Maradjak bejelentketve</label>
        </div>

        <p class="small mb-5 pb-lg-2"><a href="#!">Elfelejtetted a jelszavad?</a></p>

        <div id="loginbutton" class="mb-5">
            <input type="submit" name="bejelentkezes" id="bejelentkezes" value="Bejelentkezés">
        </div>
        </form>
        <div>
            <p class="mb-0 mt-5">Még nincs fiókod? <a href="regist.php" class="fw-bold">Regisztrálj!</a></p>
        </div>

    </div>

</section>
<?php
require_once ("templates/footer.php");
?>