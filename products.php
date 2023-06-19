<?php
require_once ("templates/head.php");
require_once ("templates/nav.php");
?>

<!-- Szűrő -->
<div id="sidebar">
    <h3>Szűrő</h3>
    <p id="category">Kategóriák<p>
    <div>
        <input id="check" type="checkbox" class="check">
        <label for="check"><span class="icon"></span>Stout</label>
    </div>
    <div>
        <input id="check" type="checkbox" class="check">
        <label for="check"><span class="icon"></span>Ipa</label>
    </div>
    <div>
        <input id="check" type="checkbox" class="check">
        <label for="check"><span class="icon"></span>Lager</label>
    </div>
    <div>
        <input id="check" type="checkbox" class="check">
        <label for="check"><span class="icon"></span>Cherrybear</label>
    </div>
    <div>
        <input id="check" type="checkbox" class="check">
        <label for="check"><span class="icon"></span>Brown Ale</label>
    </div>
    <div>
        <input id="check" type="checkbox" class="check">
        <label for="check"><span class="icon"></span>American Amber Ale</label>
    </div>
</div>  

<!-- Szűrő Md-től -->
<button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
    Szűrő
</button>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Szűrő</h5>
        <button type="button" class="btn-close text-reset btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="dropdown mt-3">
            <div>
                <input id="check" type="checkbox" class="check" checked>
                <label for="check"><span class="icon"></span>Stout</label>
            </div>
            <div>
                <input id="check" type="checkbox" class="check">
                <label for="check"><span class="icon"></span>Ipa</label>
            </div>
            <div>
                <input id="check" type="checkbox" class="check">
                <label for="check"><span class="icon"></span>Lager</label>
            </div>
            <div>
                <input id="check" type="checkbox" class="check">
                <label for="check"><span class="icon"></span>Cherrybear</label>
            </div>
            <div>
                <input id="check" type="checkbox" class="check">
                <label for="check"><span class="icon"></span>Brown Ale</label>
            </div>
            <div>
                <input id="check" type="checkbox" class="check">
                <label for="check"><span class="icon"></span>American Amber Ale</label>
            </div>
        </div>
    </div>
</div>
    <!-- Products -->
    <p id="cim">Akciós termékek</p>
    <section id="products">
        <div class="container">
            <div class="row">
                <article class="col-md">
                    <div>
                        <img src="img/stout.jpg" alt="" title="">
                    </div>
                    <p>Név1</p>
                    <p><span>750 Ft</span></p>
                </article>
                <article class="col-md">
                    <div>
                        <img src="img/ipa.jpg" alt="" title="">
                    </div>
                    <p>Név2</p>
                    <p><span>800 Ft</span></p>
                </article>
                <article class="col-md">
                    <div>
                        <img src="img/lager.jpg" alt="" title="">
                    </div>
                    <p>Név3</p>
                    <p><span>350 Ft</span></p>
                </article>
            </div>
            <div class="row">
                <article class="col-md">
                    <div>
                        <img src="img/stout.jpg" alt="" title="">
                    </div>
                    <p>Név4</p>
                    <p><span>750 Ft</span></p>
                </article>
                <article class="col-md">
                    <div>
                        <img src="img/ipa.jpg" alt="" title="">
                    </div>
                    <p>Név5</p>
                    <p><span>800 Ft</span></p>
                </article>
                <article class="col-md">
                    <div>
                        <img src="img/lager.jpg" alt="" title="">
                    </div>
                    <p>Név6</p>
                    <p><span>350 Ft</span></p>
                </article>
            </div>
        </div>
</section> 

<?php
require_once ("templates/footer.php");
?>