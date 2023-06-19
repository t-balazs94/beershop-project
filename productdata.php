<?php
require_once ("templates/head.php");
require_once ("templates/nav.php");
?>

<section id="productdata">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg">
                <img src="img/stout.jpg" alt="stout" title="stout" id="termekkep">
            </div>
            <div class="col-lg">
                <p id="name">Black Stout</p>
                <p>Ár: 750Ft</p>
                <p>Készleten van:</p>
                <form>
                    <p>Rendelt mennyiség:</p>
                    <input type="number" name="darabszam" id="db" min="1" value="">
                    <input type="submit" value="Kosár" id="rogzit" name="ok">
                </form>
            </div>
        </div>    
    </div>
    <div id="parameters" class="mt-4">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Leírás</a>
                <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Paraméterek</a>    
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet placerat neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec accumsan nisl ac turpis egestas, vitae accumsan nibh dictum. Sed condimentum, justo eget aliquet congue, est odio eleifend quam, ut fermentum sem odio quis ex. Suspendisse sollicitudin vehicula augue, nec porta eros placerat sed. Mauris lobortis sodales orci, id egestas ligula tempor vel. Nunc vulputate tempor turpis, in consectetur quam rhoncus vitae. Cras in mauris vel nisi iaculis tincidunt quis vitae quam. Curabitur posuere arcu libero, in vehicula lorem lobortis a. Etiam porta lacus in ipsum accumsan, a ornare purus luctus. Suspendisse potenti.</p>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <table>
                    <tr>
                        <td>Típus</td>
                        <td>Stout</td>
                    </tr>
                    <tr>
                        <td>Alkoholfok</td>
                        <td>4,4%</td>
                    </tr>
                    <tr>
                        <td>Kiszerelés</td>
                        <td>0,44l - doboz</td>
                    </tr>
                    <tr>
                        <td>Szín</td>
                        <td>Fekete</td>
                    </tr>
                    <tr>
                        <td>Erjesztés</td>
                        <td>Felsőerjesztésű</td>
                    </tr>
                    <tr>
                        <td>Származási hely</td>
                        <td>Magyarország</td>
                    </tr>
                    <tr>
                        <td>Gyártó</td>
                        <td>Green Wolf</td>
                    </tr>
                </table>    
            </div>
        </div>
    </div>
    <div class="mt-3">
        <p>Fizetési módok:</p>
        <img src="img/fizmodok.png" alt="fizmodok" title="fizmodok" id="fizmodok">
    </div>
</section>

<?php
require_once ("templates/footer.php");
?>