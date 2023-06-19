<?php
require_once ("templates/head.php");
require_once ("templates/nav.php");
?>

<!-- Registration -->
<?php
        if (isset($uzenet)) {
?>
            <div class="alert alert-dismissible fade show" role="alert">
                <?php echo "<h4 style='color:red;'>$uzenet</h4>"; ?>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
<?php
        }
?>
<div class="container" id="regist">
    <h1>Regisztráció</h1>
    <?php
    if (isset($result)) {
        print("<h4 style='color:green;'>$result</h4>");
    }
    if (isset($error)) {
        print("<h4 style='color:red;'>$error</h4>");
    }
    ?>
    <form action="includes/singup.inc.php" class="needs-validation mt-5 mb-5" method="post" name="regForm" onsubmit="return regFormValidation()">
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label>Vezeték név:</label>
                    <input type="text" id="veznev" name="veznev" class="form-control" required>
                    <div class="errorMsg" style="color:red;"></div>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label>Kereszt név:</label>
                    <input type="text" id="kernev" name="kernev" class="form-control" required>
                    <div class="errorMsg" style="color:red;"></div>
                </div>
            </div>
        </div>
        <div class="form-group" id="pad">
            <label>Felhasználói név:</label>
            <input type="text" id="felnev" name="felnev" class="form-control" required>
            <div class="errorMsg" style="color:red;"></div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label>Jelszó:</label>
                    <input type="password" id="jelszo" name="jelszo" class="form-control" required>
                    <div class="errorMsg" style="color:red;"></div>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label>Jelszó ismét:</label>
                    <input type="password" id="jelszo2" name="jelszo2" class="form-control" required> 
                    <div class="errorMsg" style="color:red;"></div>
                </div>
            </div>
            <small class="form-text text-muted">
                Legalább tartalmaznia kell kettőt az alábbiakból: kisbetű, nagybetű, számjegy és írásjel!
            </small>
        </div>
        <div class="form-group" id="pad">
            <label>E-mail cím:</label>
            <input type="email" id="email" name="email" class="form-control" required>
            <div class="errorMsg" style="color:red;"></div>
        </div>
        <div class="form-group" id="pad">
            <label>Telefonszám:</label>
            <input type="tel" id="telephone" name="telephone" class="form-control" required>
            <div class="errorMsg" style="color:red;"></div>
        </div>
        <div class="form-check mt-5 mb-5 p-0">
            <input type="checkbox" name="check" id="check" class="form-check-input" required>
            <label for="check" class="form-check-label ms-2 mt-0 mb-0">Adatvédelmi nyilatkozat elfogadása</label>
        </div>
        <div class="m-3 text-center mt-5 mb-5">
            <input type="hidden" name="event" value="regisztrácio">
            <input type="submit" id="regisztracio" name="regisztracio" value="Regisztráció">
        </div>
    </form>
</div>

<?php
require_once ("templates/footer.php");
?>