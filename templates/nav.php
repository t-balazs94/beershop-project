<body>
    <header>
        <div class="container-fluid text-center" id="firstrow">
            <div class="row">
                <div class="col-md">
                    <a href="index.php"><img src="img/greenwolf.png" id="logo"  title="Logo" alt="Logó"></a>
                </div>
                <div class="col-md">
                    <form class="mt-4">
                        <input type="text" name="search" id="search" placeholder="Keresés..." class="rounded-pill ps-3 pe-3">
                    </form>
                </div>
                <div class="col-md">
                    <div class="row">
                    <?php
                    if(isset($_SESSION["userid"]))
                    {
                    ?>
                    <div C>
                    <a href="#"><?php echo $_SESSION["userfelnev"]; ?></a>
                    </div>
                    <div class="col">
                    <a href="includes/logout.inc.php">Kijelentkezés</a>
                    </div>
                    <?php
                    }
                    else
                    {
                    ?>
                    <div class="col">    
                    <a href="regist.php"><p>Regisztrálj!</p></a>
                    </div>
                    <div class="col">    
                    <a href="login.php"><p>Bejelentkezés</p></a>
                    </div>
                    <?php
                    }
                    ?>
                    <!--
                    <a href="login.php" class="p-2"><img src="img/account_icon.png" alt="account_icon" title="account_icon"><p>Bejelentkezés</p></a>
                    <a href="" class="p-2"><img src="img/basket_icon.png" alt="basket_icon" title="basket_icon">Kosár</a>
                    <a href="" class="p-2"><img src="img/log-out_icon.png" alt="log-out_icon" title="log-out_icon">Kijelentkezés</a>
                    -->
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container-fluid justify-content-center">
                <button class="navbar-toggler d-md-none m-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleContent" aria-controls="navbarToggleContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarToggleContent">
                    <ul class="navbar-nav">
                        <li class="nav-item p-2"><a class="nav-link" href="index.php#rolunk">Rólunk</a></li>
                        <li class="nav-item p-2"><a class="nav-link" href="products.php">Termékek</a></li>
                        <li class="nav-item p-2"><a class="nav-link" href="transport.php">Szállítás</a></li>
                        <li class="nav-item p-2"><a class="nav-link" href="index.php#elerhetosegek">Kapcsolat</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>  