<?php
require_once ("templates/head.php");
require_once ("templates/nav.php");
?>
  <!-- Parallax -->
        <section id="parallax">
            <h1 class="mb-0">Üdvözöllek a<br>Green Wolf oldalán!</h1>
        </section>
 <!-- Rólunk -->
        <section id="rolunk">
            <div>
            <h2 class="text-uppercase mt-4" id="rolunkcimke">Rólunk</h2>
            <img src="img/taproom.jpg" id="taproom"  title="taproom" alt="taproom">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum felis in dui cursus faucibus. Pellentesque congue, 
                urna et luctus efficitur, lorem odio facilisis est, id hendrerit odio odio at mi. Praesent sit amet lorem et odio maximus 
                vulputate. In tristique velit in eros pulvinar, et aliquet est auctor. Sed ut ipsum et massa sagittis pretium. Sed varius 
                libero mauris, id suscipit urna rutrum eget. Aenean auctor semper eros, at venenatis ligula scelerisque ut. Donec blandit 
                auctor fringilla. Donec fringilla nec dui sed eleifend. Suspendisse scelerisque lectus nec sapien posuere vulputate. Nam 
                iaculis lectus in luctus porta. Aliquam sagittis nec elit et aliquam. Vivamus quis blandit justo. Nullam id lacinia tellus, 
                nec posuere erat. Nullam ullamcorper nunc non feugiat venenatis. Mauris elit ipsum, lobortis vel sapien eget, laoreet semper 
                enim.
            </p>

            <p>
                Donec sodales egestas dui, eget pharetra nisi sagittis luctus. Nunc in tortor tempor diam faucibus iaculis. Nullam odio ligula, 
                auctor et ultrices eget, aliquam laoreet purus. Duis feugiat diam et eleifend sollicitudin. Curabitur scelerisque erat non 
                imperdiet malesuada. Vestibulum nec sem eu velit lobortis rutrum et vel erat. Suspendisse potenti. Pellentesque at tellus nec 
                dui volutpat bibendum non rhoncus tellus. Nulla vestibulum neque vestibulum ante luctus, id lobortis nunc consequat. Curabitur 
                feugiat nibh ut nulla condimentum, et cursus nisi vestibulum. Etiam quis malesuada tellus. Cras eu posuere est. Nulla facilisi.
            </p>
        </section>
 <!-- Termékek -->
        <section id="termekek">
            <h2 class="text-uppercase" id="termekekcimke">Kiemelt termékeink</h2>
            <div class="container">
                <div class="row mb-4">
                    <article class="col-md">
                        <div>
                            <img src="img/ipa.jpg" alt="ipa" title="ipa" id="termekkep">
                        </div>
                        <p>Ipa</p>
                        <p id="ar"><span>750 Ft</span></p>
                    </article>
                    <article class="col-md">
                        <div>
                            <img src="img/stout.jpg" alt="stout" title="stout" id="termekkep">
                        </div>
                        <p>Stout</p>
                        <p id="ar"><span>800 Ft</span></p>
                    </article>
                    <article class="col-md">
                        <div>
                            <img src="img/lager.jpg" alt="lager" title="lager" id="termekkep">
                        </div>
                        <p>Lager</p>
                        <p id="ar"><span>350 Ft</span></p>
                    </article>
                </div>
            </div>
        </section>
        <h2 class="text-uppercase">Akciós termékeink</h2>
        <section id="termekek">
            <div class="container">
                <div class="row mb-4">
                    <article class="col-md">
                        <div>
                            <img src="img/cherry-beer.jpg" alt="cherrybeer" title="cherrybear" id="termekkep">
                        </div>
                        <p>Cherry Beer</p>
                        <p id="ar"><span>400 Ft</span></p>
                    </article>
                    <article class="col-md">
                        <div>
                            <img src="img/Brown-Ale.jpg" alt="brownale" title="brownale" id="termekkep">
                        </div>
                        <p>Brown Ale</p>
                        <p id="ar"><span>550 Ft</span></p>
                    </article>
                    <article class="col-md">
                        <div>
                            <img src="img/american-amber-ale.jpg" alt="americanamberale" title="americanamberale" id="termekkep">
                        </div>
                        <p>American Amber Ale</p>
                        <p id="ar"><span>550 Ft</span></p>
                    </article>
                </div>
            </div>
        </section>

<!-- Carousel -->
        <section class="pt-5">
            <div id="carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <ul class="carousel-indicators">
                    <li data-bs-target="#carousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carousel" data-bs-slide-to="2"></li>
                    <li data-bs-target="#carousel" data-bs-slide-to="3"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/beer_wall.jpg" class="d-block w-100" alt="alternative text" title="alternative text" id="carouselpicture">
                        <div class="carousel-caption">
                            <p>Minőségi termékek egy helyen!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/beer_tap.jpg" class="d-block w-100" alt="alternative text" title="alternative text" id="carouselpicture">
                        <div class="carousel-caption">
                            <p>Minőségi termékek egy helyen!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/beer_and_hops.jpg" class="d-block w-100" alt="alternative text" title="alternative text" id="carouselpicture">
                        <div class="carousel-caption">
                            <p>Minőségi termékek egy helyen!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/beer_and_sea.jpg" class="d-block w-100" alt="alternative text" title="alternative text" id="carouselpicture">
                        <div class="carousel-caption">
                            <p>Minőségi termékek egy helyen!</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

  <!-- Sörtűra -->
        <section id="sortura">
            <h2 class="text-uppercase mt-4" id="sorturacimke">Sörtúra</h2>
            <img src="img/brewery.jpg" alt="brewery" title="brewery" id="brewery">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum felis in dui cursus faucibus. Pellentesque congue, 
                urna et luctus efficitur, lorem odio facilisis est, id hendrerit odio odio at mi. Praesent sit amet lorem et odio maximus 
                vulputate. In tristique velit in eros pulvinar, et aliquet est auctor. Sed ut ipsum et massa sagittis pretium. Sed varius 
                libero mauris, id suscipit urna rutrum eget. Aenean auctor semper eros, at venenatis ligula scelerisque ut. Donec blandit 
                auctor fringilla. Donec fringilla nec dui sed eleifend. Suspendisse scelerisque lectus nec sapien posuere vulputate. Nam 
                iaculis lectus in luctus porta. Aliquam sagittis nec elit et aliquam. Vivamus quis blandit justo. Nullam id lacinia tellus, 
                nec posuere erat. Nullam ullamcorper nunc non feugiat venenatis. Mauris elit ipsum, lobortis vel sapien eget, laoreet semper 
                enim.
            <p>
        </section>
  
<!-- Elérhetőségek -->
        <section id="elerhetosegek">
            <h2 class="text-uppercase mt-5" id="elerhetosegekcimke">Elérhetőségek</h2>
            <div id="adatok" class="text-light">
                <h3>Green Wolf Company</h3>
                <b>E-mal cím:</b><p>info@greenwolf.com</p>
                <p><b>Cím:</b>1139 Budapest, Akácfa út 16.<br>
                    <b>Tel:</b> +36 (1) 234 5678</p>
                <h4>Nyitvatartás</h4>
                <p><b>hétfő - péntek:</b> 11:30 - 22:00<br>
                    <b>szombat - vasárnap:</b> 11:30 - 23:00</p>
            </div>
            <div id="google">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2695.5656352223987!2d19.065543115818112!3d47.498374603440766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc67b7c7ec81%3A0x89512a06d6a22b4b!2sBudapest%2C%20Ak%C3%A1cfa%20u.%2016%2C%201072!5e0!3m2!1shu!2shu!4v1678896294255!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
   
<?php
require_once ("templates/footer.php");
?>