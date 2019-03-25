<!DOCTYPE html>
<html>

<head>
    <title>Virksomheter | Inmarket</title>
    <?php include_once 'templates/head.php'; ?>
</head>

<body>
<?php
include_once 'templates/navigation.php';
include_once 'templates/cookie_notice.php';
?>

<div class="w3-row margin-top-100" style="background: #181717;height:calc(100vh - 80px);">
    <div class="w3-col l7 white-text w3-large w3-container">
        <article class="narrow-content" style="width:45vw">
            <h2>Finn din neste ansatt mens du skaper kompetanse</h2>
            <p>På plattformen til InMarket venter mange talenter på en sjanse til å vise deg sine kvaliteter.
                Registrerte brukere er ivrige etter å bygge kompetanse og erfaring slik at de kan bli bedre kvalifiserte
                til jobb.</p>
        </article>
    </div>
    <div class="w3-col l4 white-bg w3-center w3-container">
        <p class="w3-xxlarge w3-margin">La oss møtes</p>
        <p>Be oss inn på møte og lær hvordan dere kan bruke InMarket</p>
        <form class="" action="index.php" method="post" id="kontaktSkjemaVirksomhet">

            <!--
            <input type="text" name="" value="" placeholder="Bedriftsnavn">
            <input type="email" name="" value="" placeholder="E-post">
            <input type="text" name="" value="" placeholder="Sted">-->

            <div class=" w3-content w3-center register-container">

                <p>Bedrift:​</p>
                <input type="text" name="bedriftnavn" value="" placeholder="Bedriftsnavn"
                       class="w3-input w3-animate-input" required id="inputKommune">
                <p>E-post:</p>
                <input type="email" name="email" value="" placeholder="deg@eksempel.no​" id="inputPlace"
                       class="w3-input w3-animate-input" required id="inputEpost">


                <p>Kommune:</p>
                <input type="text" name="kommune" value="" placeholder="Navnet på din kommune" required
                       class="w3-input w3-animate-input" id="inputKommune">

                <label>
                    <p class="w3-margin" style="font-weight:normal">


                        Jeg godkjenner InMarkets Vilkår for Bruk og <br> <a
                                href="personvern.php" style="text-decoration:underline;" target="_blank">Personvernerklæring</a>.​

                        <input type="checkbox" name="personvern" id="personvern" value="student"
                               class="klient-radio "
                               onclick="studentSelected()" style="width:1px; position:relative; left:20px;">
                        <i class="fas fa-user-tie w3-xlarge new-radio"></i>
                    </p>

                </label>


                <button class="black-button w3-card  w3-padding-8" type="submit"
                        ">Avtal møte
                </button>
                <div>
                    <p>
                        - Eller -
                    </p>
                </div>
                <button class="black-button w3-card w3-padding-8 " type="submit"
                   formaction="/forhandsregistreringbedrift.php">Registrer bedriften din nå
                </button>

                <p id="responseText"></p>

            </div>
        </form>
    </div>
</div>



<div class="narrow-content w3-center w3-container">
    <h2 class="w3-margin " style="margin-top:60px!important;">Hvordan funker det?</h2>

    <div class="w3-row  w3-padding-32">
        <div class="w3-col l6 text-align-right w3-container medium-center">
            <span class="golden-text w3-xlarge">Beskriv ditt ønske</span>
            <p>List opp kvalifikasjonene dere trenger slik at systemet kan finne de rette kandidatene for din
                bedrift.​</p>
        </div>
        <div class="w3-col m2 w3-container w3-hide-small w3-hide-medium">
            <img src="img/hacker.jpg" alt="" style="width:100%;" class="w3-circle">
        </div>
        <div class="w3-col m4 w3-hide-small w3-hide-medium">
            <div class="speech-bubble-left w3-container">
                <p>Vi ser etter noen med ferdighet innen JavaScript og SQL.</p>
            </div>
        </div>
    </div>

    <div class="w3-row w3-padding-64">
        <div class="w3-col l6 w3-container w3-hide-small w3-hide-medium">
            <div class="w3-row">
                <div class="w3-col l4">
                    <img src="img/blonde.jpg" alt="" style="width:100%;" class="w3-circle">
                </div>
                <div class="w3-col l4">
                    <img src="img/singapore.jpg" alt="" style="width:100%;" class="w3-circle">
                </div>
                <div class="w3-col l4">
                    <img src="img/chris-africa.jpg" alt="" style="width:100%;" class="w3-circle">
                </div>
            </div>
        </div>

        <div class="w3-col l6 text-align-left w3-container medium-center">
            <span class="golden-text w3-xlarge">Oppnå kontakt</span>
            <p>Dere velger hvilke brukere dere vil ta kontakt med. Lag en avtale og bli enige om når, hvor og hva.</p>
        </div>
    </div>

    <div class="w3-row w3-padding-32">
        <div class="w3-col l6 text-align-right medium-center w3-container">
            <span class="golden-text w3-xlarge">Velg ditt neste trekk</span>
            <p>Når du har prøvd ut en bruker lenge nok kan du velge om du vil ansette dem eller prøve ut andre
                kandidater.​​</p>
        </div>
        <div class="w3-col m2 w3-container w3-hide-small w3-hide-medium">
            <img src="img/startled.jpg" alt="" style="width:100%;" class="w3-circle">
        </div>
        <div class="w3-col m4 w3-hide-small w3-hide-medium">
            <div class="speech-bubble-left w3-container">
                <p>Vi er fornøyd med det du har vist oss i dag. Vil du komme igjen annen gang?</p>
            </div>
        </div>
    </div>




    <div class="w3-center w3-padding-32 w3-xlarge">
        <a href="forhandsregistreringbedrift.php" class="black-button w3-card w3-padding-16 w3-margin">Registrer
            bedriften din</a>

    </div>

    <p class="w3-padding-64">Kontakten brukeren har hatt med din bedrift og tilbakemelding på ferdigheter loggføres på profilen til
        brukeren. Inviter folk inn, slik at de kan bygge erfaringer som vil hjelpe dem videre i arbeidslivet.</p>

</div>


<div class="w3-container w3-center w3-content w3-large w3-padding-32 w3-card" style="width:70vw; margin:auto;">
    <div class="w3-row w3-hide-small w3-hide-medium">
        <div class="w3-col l5">
            <div class="w3-row">
                <div class="w3-col l2">
                    <img src="img/fig/black-person.png" alt="" style="width:100%;">
                </div>
                <div class="w3-col l2">
                    <img src="img/fig/red-person.png" alt="" style="width:100%;">
                </div>
                <div class="w3-col l2">
                    <img src="img/fig/green-person.png" alt="" style="width:100%;">
                </div>
                <div class="w3-col l2">
                    <img src="img/fig/gray-person.png" alt="" style="width:100%;">
                </div>
                <div class="w3-col l2">
                    <img src="img/fig/green-person.png" alt="" style="width:100%;">
                </div>
                <div class="w3-col l2">
                    <img src="img/fig/yellow-person.png" alt="" style="width:100%;">
                </div>
            </div>
            <div class="w3-row">
                <div class="w3-col l2">
                    <img src="img/fig/yellow-person.png" alt="" style="width:100%;">
                </div>
                <div class="w3-col l2">
                    <img src="img/fig/gray-person.png" alt="" style="width:100%;">
                </div>
                <div class="w3-col l2">
                    <img src="img/fig/black-person.png" alt="" style="width:100%;">
                </div>
                <div class="w3-col l2">
                    <img src="img/fig/black-person.png" alt="" style="width:100%;">
                </div>
                <div class="w3-col l2">
                    <img src="img/fig/yellow-person.png" alt="" style="width:100%;">
                </div>
                <div class="w3-col l2">
                    <img src="img/fig/gray-person.png" alt="" style="width:100%;">
                </div>
            </div>
            <div class="w3-row">
                <div class="w3-col l2">
                    <img src="img/fig/green-person.png" alt="" style="width:100%;">
                </div>
                <div class="w3-col l2">
                    <img src="img/fig/black-person.png" alt="" style="width:100%;">
                </div>
                <div class="w3-col l2">
                    <img src="img/fig/yellow-person.png" alt="" style="width:100%;">
                </div>
                <div class="w3-col l2">
                    <img src="img/fig/gray-person.png" alt="" style="width:100%;">
                </div>
                <div class="w3-col l2">
                    <img src="img/fig/red-person.png" alt="" style="width:100%;">
                </div>
                <div class="w3-col l2">
                    <img src="img/fig/green-person.png" alt="" style="width:100%;">
                </div>
            </div>
        </div>
        <div class="w3-col l7 w3-center golden-text">
            <p>Plattformen kobler dere til kandidater som passer deres behov. Dere betaler kun for tiden dere bruker på
                møter, prosjekter, intervjuer eller oppdrag med brukerne på plattformen.</p>
            <p>Bli med å bygge kompetansen til arbeidssøkere samtidig som dere ser etter den beste kandidaten til
                arbeidsplassen.</p>
        </div>
    </div>
    <div class="w3-row w3-row-padding">
        <div class="w3-col l5">
            <p>La vårt automatiserte system koble deg med potensielle arbeidstakere</p>
        </div>
        <div class="w3-col l7 w3-center w3-hide-medium">
            <p>
                <a href="forhandsregistreringbedrift.php" class="black-button w3-card">Registrer bedrift nå</a>
            </p>
        </div>
    </div>
</div>

<?php include_once 'templates/scripts.php'; ?>
</body>

</html>
