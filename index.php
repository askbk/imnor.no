<!DOCTYPE html>
<html>

<head>
    <title>InMarket - viser veien videre</title>
    <?php include_once 'templates/head.php'; ?>
</head>

<body itemscope itemtype="http://schema.org/Organization">
<?php
include_once 'templates/navigation.php';
include_once 'templates/cookie_notice.php';
?>

<div class="margin-top-100"
     style="display:flex;align-items:center;flex-wrap:wrap;justify-content: center;align-items: center;">
    <div class="bgimg-christian-kamera w3-hide-small w3-hide-medium"
         style="background-size: cover;flex-basis: 600px;height: 75vh;flex-grow: 5;background-position: center;">
    </div>

    <div class="bgimg-christian-kamera w3-hide-large"
         style="background-size: cover;flex-basis: 600px;height: 75vh;flex-grow: 5; background-position:-150px;">
    </div>

    <div class="w3-hide-large w3-hide-small" style="height:75vh;">
        <div class="w3-container w3-center"
             style="padding-left:32px;padding-right:32px;width:100%;flex-shrink:1; margin 0 auto; transform: translateY(-50%); position:relative; top:50%;">
            <h3 class="golden-text">Bli koblet til jobben du drømmer om.</h3>
            <p>
                <a href="forhandsregistrering.php" class="black-button w3-card w3-xlarge">Lag gratis bruker nå</a>
            </p>
            <p class="w3-xlarge">InMarket kobler arbeidsplasser med jobbsøkere.</p>
            <p>Er du arbeidsgiver? <strong><a href="virksomhet.php">Les mer her</a></strong></p>
        </div>
    </div>
    <div class="black-bg w3-hide-medium" style="height:75vh;">
        <div class="w3-container w3-center"
             style="padding-left:32px;padding-right:32px;width:100%;flex-shrink:1; margin 0 auto; transform: translateY(-50%); position:relative; top:50%;">
            <h3 class="golden-text">Bli koblet til jobben du drømmer om.</h3>
            <p>
                <a href="forhandsregistrering.php" class="white-button w3-card w3-xlarge">Lag gratis bruker nå</a>
            </p>
            <p class="w3-xlarge white-text">InMarket kobler arbeidsplasser med jobbsøkere.</p>
            <p class="white-text">Er du arbeidsgiver? <strong><a href="virksomhet.php">Les mer her</a></strong></p>
        </div>
    </div>
</div>

<!-- Partner logos -->
<div class="white-text w3-padding-16 w3-center w3-content" style="width:60vw; margin 0 auto;" id="partner-slideshow">
    <div class="partner-slide" itemprop="sponsor">
        <a href="https://www.innovasjonnorge.no/" target="_blank"><img src="img/logos/innovasjon_norge.png" alt="Innovasjon Norge"
                                                           width="100%"></a>
    </div>
    <div class="partner-slide" itemprop="sponsor">
        <a href="http://www.charge.no" target="_blank"><img src="img/logos/charge.png" alt="Charge" width="100%"></a>
    </div>
    <div class="partner-slide" itemprop="sponsor">
        <a href="http://www.nrk.no/buskerud" target="_blank"><img src="img/logos/nrk.png" alt="NRK Buskerud"
                                                                  width="100%"></a>
    </div>
    <div class="partner-slide" itemprop="sponsor">
        <a href="http://bni.no/nn/index" target="_blank"><img src="img/logos/bni.png" alt="BNI"
                                                                  width="100%"></a>
    </div>
    <div class="partner-slide" itemprop="sponsor">
        <a href="http://nfdr.no/om-oss-medlemmer/bedrifter-i-naeringsforeningen?details=21626" target="_blank"><img
                    src="img/logos/naeringsforeningen.png" alt="Næringsforeningen" width="100%"></a>
    </div>
    <div class="partner-slide" itemprop="sponsor">
        <a href="https://www.nordicchoicehotels.no/hotell/norge/drammen/comfort-hotel-union-brygge/?gclid=Cj0KCQjw37fZBRD3ARIsAJihSr3l1t9G6sH7FO35gTdfXQaN_FdA3OmOVDBvs6Szp1H1QrhZ8uEpgccaAgleEALw_wcB"
           target="_blank"><img src="img/logos/unionbrygge.png" alt="Comfort Hotell Union Brygge" width="100%"></a>
    </div>
    <div class="partner-slide" itemprop="sponsor">
        <a href="https://www.akademiet.no" target="_blank"><img src="img/logos/akademiet.png" alt="Akademiet"
                                                                width="100%"></a>
    </div>
    <div class="partner-slide" itemprop="sponsor">
        <a href="https://www.sparkntnu.no/" target="_blank"><img src="img/logos/spark.jpg" alt="NTNU Spark"
                                                                 width="100%"></a>
    </div>
    <div class="partner-slide" itemprop="sponsor">
        <a href="https://www.allinclusivetalk.com/" target="_blank"><img src="img/logos/allinclusive.png"
                                                                         alt="All Inclusive Talk" width="100%"></a>
    </div>
    <div class="partner-slide" itemprop="sponsor">
        <a href="https://www.glocalview.com/" target="_blank"><img src="img/logos/globalview.png"
                                                                         alt="Global View" width="100%"></a>
    </div>
    <div class="partner-slide" itemprop="sponsor">
        <a href="https://nfdr.no/annet-internasjonale-drammen-aktuelt/" target="_blank"><img
                    src="img/logos/int_dram.jpg" alt="" width="100%"></a>
    </div>
    <div class="partner-slide" itemprop="sponsor">
        <a href="https://etablererveiledning.no/" target="_blank"><img src="img/logos/etablererveiledning.png" alt=""
                                                                       width="100%"></a>
    </div>

    <div class="partner-slide" itemprop="sponsor">
        <a href="https://cloudberrymultimedia.com/home" target="_blank"><img src="img/logos/cloudberry.png" alt="Cloud berry multimedia production"
                                                           width="100%"></a>
    </div>

    <div class="partner-slide" itemprop="sponsor">
        <a href="http://www.lier.kommune.no/politikk-og-samfunnsutvikling/lierlaben/" target="_blank"><img src="img/logos/lierlaben.png" alt="Lierlaben"
                                                                             width="100%"></a>
    </div>





    <!--
        <div class="partner-slide" itemprop="sponsor">
            <a href="https://www.usn.no/" target="_blank"><img src="img/logos/usn.png" alt="Universitetet i Sørøst-Norge"
                                                               width="100%"></a>
        </div>

        <div class="partner-slide" itemprop="sponsor">
            <a href="https://www.drammen.kommune.no/" target="_blank"><img src="img/logos/kommune.png" alt="Drammen kommune"
                                                                           width="100%"></a>
        </div>-->







</div>

<div class="narrow-content w3-center w3-container" 2>
    <h2 class="w3-margin">Hvordan funker det?</h2>

    <div class="w3-row w3-padding-32">

        <div class="w3-col l55 text-align-right w3-container medium-center">
            <strong class="golden-text w3-xlarge w3-hide-large">1.0</strong>
            <div class="golden-text w3-xlarge">Lag en profil</div>
            <p>List opp dine interesser, systemet vil jobbe for å koble deg til passende arbeidsplasser. Du vil bli
                anbefalt til relevante bedrifter.​</p>
        </div>
        <div class="w3-col m1 w3-container w3-hide-small w3-hide-medium" style="position:relative;">
            <strong class="golden-text w3-xlarge">1.0</strong>
            <div class="arrow "></div>
        </div>

        <div class="w3-container w3-hide-large w3-center" style="position:relative;">
            <div class="arrow-mobile "></div>
        </div>

        <div class="w3-col m25 w3-container w3-hide-small w3-hide-medium">
            <img src="img/elever/christian-square.jpg" alt="" style="width:120%; background-position-y:20px;"
                 class="w3-circle image-size">
        </div>
        <div class="w3-col m3 w3-hide-small w3-hide-medium speech-bubble-container">
            <div class="speech-bubble-left w3-container">
                <p>Jeg er mediaelev som ser etter jobberfaring innen filmproduksjon for nett-TV.</p>
            </div>
        </div>
    </div>

    <div class="w3-row w3-padding-64">
        <div class="w3-col m3 w3-hide-small w3-hide-medium speech-bubble-container"
             style="position:relative; left:35px;top:20px;">
            <div class="speech-bubble-right w3-container" style="">
                <p>
                    Hei. Vi fra NRK ønsker å etablere kontakt med deg!
                </p>
            </div>
        </div>
        <div class="w3-col m25 w3-container w3-hide-small w3-hide-medium">
            <img src="img/partners/chris.jpg" alt="" style="width:120%;" class="w3-circle image-size">
        </div>
        <div class="w3-col m1 w3-container w3-hide-small w3-hide-medium" style="position:relative">
            <strong class="golden-text w3-xlarge">2.0</strong>
            <div class="arrow "></div>
        </div>

        <div class="w3-col l55 text-align-left w3-container medium-center">
            <strong class="golden-text w3-xlarge w3-hide-large">2.0</strong>
            <div class="golden-text w3-xlarge">Bedriftene tar kontakt</div>
            <p>Etter at du har registrert deg er det bare å vente på tilbud fra bedrifter. I mellomtiden hjelper vi til
                med å forberede deg til å møte arbeidsgivere.</p>
        </div>
        <div class="w3-container w3-hide-large w3-center" style="position:relative;">
            <div class="arrow-mobile "></div>
        </div>
    </div>

    <div class="w3-row w3-padding-32 the-3th-content">
        <div class="w3-col l55 text-align-right medium-center w3-container">
            <strong class="golden-text w3-xlarge w3-hide-large">3.0</strong>
            <div class="golden-text w3-xlarge">Du velger</div>
            <p>Velg ut bedriftene som oppfyller dine ønsker og aksepter deres invitasjoner. ​</p>
        </div>
        <div class="w3-col m1 w3-container w3-hide-small w3-hide-medium" style="position:relative;">
            <strong class="golden-text w3-xlarge">3.0</strong>
            <div class="arrow "></div>
        </div>

        <div class="w3-col m55 w3-container w3-hide-small w3-hide-medium">

            <div class="w3-row w3-panel">
                <div class="w3-col m2">
                    <i class="fas fa-check" style="color:#00d200;"></i>
                </div>
                <div class="w3-col m10">
                    <div class="w3-card w3-container">
                        Invitasjon fra NRK-Buskerud
                    </div>
                </div>
            </div>

            <div class="w3-row w3-panel">
                <div class="w3-col m2">
                    <i class="fas fa-check" style="color:#00d200;"></i>
                </div>
                <div class="w3-col m10">
                    <div class="w3-card w3-container">
                        Invitasjon fra Comfort Hotel
                    </div>
                </div>
            </div>

            <div class="w3-row w3-panel">
                <div class="w3-col m2">
                    <i class="fas fa-times" style="color:red;"></i>
                </div>
                <div class="w3-col m10">
                    <div class="w3-card w3-container">
                        Invitasjon fra InMarket Media
                    </div>
                </div>
            </div>

        </div>
        <div class="w3-container w3-hide-large w3-center" style="position:relative;">
            <div class="arrow-mobile "></div>
        </div>
    </div>

    <div class="w3-row" style="padding-top:64px!important; padding-bottom:8px;">
        <div class="w3-col m2 w3-container w3-hide-small w3-hide-medium">
        </div>
        <div class="w3-col m25 w3-container w3-hide-small w3-hide-medium">
            <img src="img/elever/christian-square.jpg" alt="" style="width:50%;" class="w3-circle image-size">
        </div>

        <div class="w3-col m1 w3-container w3-hide-small w3-hide-medium">
        </div>
        <div class="w3-col m1 w3-container w3-hide-small w3-hide-medium" style="position:relative;">
            <strong class="golden-text w3-xlarge">4.0</strong>
        </div>

        <div class="w3-col l55 text-align-left medium-center w3-container">
            <strong class="golden-text w3-xlarge w3-hide-large">4.0</strong>
            <div class="golden-text w3-xlarge">Bygg opp din kompetanse</div>
            <p>Etter bedriftsbesøk får du en validering som bekrefter dine ferdigheter. Bedriften har også mulighet til
                å tilby deg stilling om de ønsker.​</p>
        </div>
    </div>

    <div class="w3-row">
        <div class="w3-col l55 w3-center w3-hide-small w3-hide-medium" style="position:relative;left:50px;">
            <img src="img/fig/golden-star.png" alt="" style="width:10%;">
            <img src="img/fig/golden-star.png" alt="" style="width:10%;">
            <img src="img/fig/golden-star.png" alt="" style="width:10%;">
            <img src="img/fig/black-star.png" alt="" style="width:7%;">
            <img src="img/fig/black-star.png" alt="" style="width:7%;">
        </div>
        <div class="w3-col l6 text-align-left w3-center w3-container w3-xlarge">
            <a href="forhandsregistrering.php" class="black-button w3-card w3-padding-16">Sett i gang nå!</a>
        </div>
    </div>

</div>

<div class="w3-xlarge margin-top-100 full-height"
     style="display:flex;background:#181717;flex-wrap:wrap-reverse;align-items:center;justify-content: center;align-items: center; height:auto;
">
    <div class="medium-center white-text" style="flex-basis:800px;padding: 64px calc(5vw);flex-grow:5;">
        <h2 class="w3-padding-32 w3-container w3-center" style="position:relative;">Workshop med vår samarbeidspartner
            All Inclusive Talk</h2>
        <p class="quote">People who know what they talk about don't need powerpoint.</p>
        <p class="quote-source">Steve Jobs</p>
        <p class="w3-padding-32">Workshopen vår er et tilbud til alle bedrifter. På workshopen lærer ansatte i din
            bedrift teknikker for bedre
            stemmebruk og kommunikasjon. Vi lærer bort konkrete øvelser og tips for å mestre presentering foran publikum
            eller samtaler med kollegaer og kunder.​</p>
        <p class="w3-center">
            <a href="https://www.allinclusivetalk.com" target="_blank" id="allinc-order" class="black-button full "
               style="background:#404040; padding: 16px 32px">Bestill workshop</a>
        </p>
    </div>

    <div class="all-inclusive-img"
         style="flex-grow: 1;background:url('img/partners/workshop.jpeg');background-repeat:no-repeat; flex-basis:600px; background-position:center;background-size:cover;">
    </div>

</div>
<div>

    <div class="w3-col l4 s12" style="background-color:white;color:black" id="forsideVideo1">
        <div class="videoWrapper w3-margin style="">
        <div style="">
            <iframe style="position:absolute; top:-5px;" src="https://player.vimeo.com/video/326205077" width="1920"
                    height="1080" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen
                    class="vimeo-video"></iframe>

        </div>
    </div>
</div>
<div class="w3-col l4 s12" style="" id="forsideVideo2">
    <div class="videoWrapper w3-margin " style="height:20vh;background-position:center;background-size:cover;">
        <div style="">
            <iframe style="position:absolute; top:-5px;" src="https://player.vimeo.com/video/327008691" width="1920"
                    height="1080" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen
                    class="vimeo-video"></iframe>

        </div>
    </div>

</div>
<div class="w3-col l4 s12" style="" id="forsideVideo3">
    <div class="videoWrapper w3-margin" style="height:20vh;background-position:center;background-size:cover;">
        <div style="">
            <iframe style="position:absolute; top:-5px;" src="https://player.vimeo.com/video/326204872" width="1920"
                    height="1080" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen
                    class="vimeo-video"></iframe>

        </div>
    </div>

</div>
</div>

<div class="w3-content w3-center w3-xxlarge golden-text">
    <p>
        Det finnes <strong>enklere</strong> og <strong>bedre</strong> måte å komme seg ut i arbeid på.​
    </p>
    <p>
        <a href="forhandsregistrering.php" class="black-button w3-card w3-xlarge" style="padding:16px;">Lag gratis
            bruker nå</a>
    </p>
</div>

<?php include_once 'templates/footer.php'; ?>

<script type="text/javascript">
    $("#allinc-order").on("click", function () {
        $.get("allinclusive.php");
    });
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/slideshow.js" charset="utf-8"></script>
</body>
</html>
