<!DOCTYPE html>
<html lang="nl">


<!--
Deze website is ontworpen en gecodeert door Letje
Copyright Letje 2016 - All rights reserved
-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

    <title>Letje - Uw visie. Uw uitstraling. Uw merk.</title>

    <meta name="keywords" content="website, logo, merk, persoonlijk, ontwerp, design, promotie, reclame, visitekaartjes" />
    <meta name="description" content="Letje biedt u promotie design, logo's, visitekaartjes, websites, filmpjes en meer! Wij streven ernaar om het karakter van uw bedrijf visueel zo sterk mogelijk naar buiten te brengen." />

    <!-- CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <style>
        .icon-block {
            padding: 0 15px;
        }

        .icon-block .material-icons {
            font-size: inherit;
        }

        p {
            font-size: 17px;
        }

        .image-container {
            width: 100%;
            height: 100%;
        }

        .lijn {
            border-bottom: 1px solid lightgrey
        }

        .logo-navbar {
            width: 100px;
            margin-top: 7px;
        }

        .activenav {
            background-color: #009bd6;
        }

        .activenavsmall {
            background-color: lightgrey;
        }

        .verbindbutton {
            transition: all 0.5s;
            transform-origin: 50% 50%;
        }

        .verbindbutton:hover {
            transform: scale(1.5);
        }

        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: local('Material Icons'), local('MaterialIcons-Regular'), url(https://fonts.gstatic.com/s/materialicons/v18/2fcrYFNaTjcS6g4U3t-Y5ZjZjT5FdEJ140U2DJYC3mY.woff2) format('woff2');
        }

        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }

        #index-banner {
            -webkit-box-shadow: inset 0px -77px 96px -75px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: inset 0px -77px 96px -75px rgba(0, 0, 0, 0.75);
            box-shadow: inset 0px -77px 96px -75px rgba(0, 0, 0, 0.75);
        }

        #hideBeforeScroll {
            display: none;
        }

        .centercenter {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .arrows {
            width: 60px;
            height: 72px;
            position: absolute;
            left: 50%;
            margin-left: -30px;
            bottom: 20px;
        }

        .arrows path {
            stroke: #00aeef;
            fill: transparent;
            stroke-width: 1px;
            -webkit-transition: stroke-width 0.5s; /* For Safari 3.1 to 6.0 */
            transition: stroke-width 0.5s;
        }

        .arrows path:hover {
            stroke-width: 3px;
        }

        @keyframes arrow {

        }

        @-webkit-keyframes arrow
        /*Safari and Chrome*/

        {
        }
    </style>
</head>


<body>

    <div class="navbar-fixed">
        <nav class="blauw" role="navigation">
            <div class="nav-wrapper container">
                <a href="index.html" class="brand-logo"><img src="img/logo_inv.png" class="logo-navbar" id="hideBeforeScroll" /></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="http://www.letje.nl" class="activenav">Home</a></li>
                    <li><a href="aanbod">Aanbod</a></li>
                    <li><a href="impressie">Impressie</a></li>
                    <li><a href="contact">Contact</a></li>
                    <li><a href="overons">Over ons</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="http://www.letje.nl" class- "activenavsmall">Home</a></li>
                    <li><a href="aanbod">Aanbod</a></li>
                    <li><a href="impressie">Impressie</a></li>
                    <li><a href="contact">Contact</a></li>
                    <li><a href="overons">Over ons</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>




    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container  centercenter">
                <h1 class="header center blauw-text"><img id="logo" src="img/logo.svg" width="300px"/></h1>
                <div class="row center">
                    <h4 class="header col s12 black-text" style="text-shadow: 1px 1px #ffffff;">Uw visie. Uw uitstraling. Uw merk.</h4>
                </div>
                <div class="row center">
                    <a href="aanbod" id="download-button" class="btn-large waves-effect waves-light geel lighten-1">Bekijk ons aanbod</a>
                </div>
            </div>
        </div>
        <div class="parallax"><img id="background" src="img/achtergrondKlein.png" width="100vw" /></div>
        <a href="#link-to">
        <svg class="arrows">
							<path class="a1" d="M0 0 L30 32 L60 0"></path>
            </svg>
          </a>
    </div>


    <div class="container">
        <div class="section">
            <br><br>
            <div class="row">
                <div class="col s12">
                    <h4 id="link-to" class="header blauw-text center">Onze kernpunten:</h4>
                </div>
            </div>


            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h5 class="center blauw-text">Compleet pakket</h5>

                        <p class="black-text" align="justify">Wij bieden een alles-in-een branding pakket aan. Zo heeft u in één keer alles wat u nodig heeft. Van logo en website tot aan banners en stickers, alles is mogelijk. U kunt uw eigen pakket samenstellen.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h5 class="center blauw-text">Precies wat u wilt</h5>
                        <p class="black-text" align="justify">Via een aantal gesprekken komen wij er achter wat uw wensen zijn. Hier passen wij onze ontwerpen op aan. Zo wordt uw merk en uw branding precies zoals u het wilt. Uw input is voor ons erg belangrijk.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h5 class="center blauw-text">Brede kennis</h5>
                        <p class="black-text" align="justify">Door onze studie zijn wij erg breed geschoold en hebben wij kennis over branding, bedrijfsuitstraling, design en websites programmeren, maar ook over gebruiksvriendelijkheid, marketing en communicatie.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="page-footer geel">
        <div class="container">
            <div class="row" style="margin-bottom: 0px;">
                <div class="col m8 s12">
                    <p class="white-text">Mail ons op <a class="white-text" href="mailto:info@letje.nl">info@letje.nl</a></p>
                </div>
                <div class="col m4 s12">
                    <a href="https://www.facebook.com/letje.nl/?fref=ts">
                        <svg class="verbindbutton" style="width:40px;height:40px" viewBox="0 0 24 24">
                <path fill="#ffffff" d="M19,4V7H17A1,1 0 0,0 16,8V10H19V13H16V20H13V13H11V10H13V7.5C13,5.56 14.57,4 16.5,4M20,2H4A2,2 0 0,0 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4C22,2.89 21.1,2 20,2Z" />
              </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/15194838?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A15194838%2Cidx%3A2-1-2%2CtarId%3A1475674000362%2Ctas%3Aletje">
                        <svg class="verbindbutton" style="width:40px;height:40px" viewBox="0 0 24 24">
                <path fill="#ffffff" d="M19,19H16V13.7A1.5,1.5 0 0,0 14.5,12.2A1.5,1.5 0 0,0 13,13.7V19H10V10H13V11.2C13.5,10.36 14.59,9.8 15.5,9.8A3.5,3.5 0 0,1 19,13.3M6.5,8.31C5.5,8.31 4.69,7.5 4.69,6.5A1.81,1.81 0 0,1 6.5,4.69C7.5,4.69 8.31,5.5 8.31,6.5A1.81,1.81 0 0,1 6.5,8.31M8,19H5V10H8M20,2H4C2.89,2 2,2.89 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4C22,2.89 21.1,2 20,2Z" />
              </svg>
                    </a>
                    <a href="https://www.instagram.com/letje.nl/">
                        <svg class="verbindbutton" style="width:40px;height:40px" viewBox="0 0 24 24">
                <path fill="#ffffff" d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
              </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                <div class="row" style="margin-bottom: 0px;">
                    <div class="col l8 s12">
                        <a class="white-text" href="algemene_voorwaarden.pdf">Algemene voorwaarden</a> | <a class="white-text" href="disclaimer.pdf">Disclaimer</a> | <a class="white-text" href="privacy policy.pdf">Privacy policy</a> | <a class="white-text"
                            href="#">Sitemap</a>
                    </div>
                    <div class="col l4 s12 ">
                        Copyright &copy; 2016 Letje
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-85692575-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>
