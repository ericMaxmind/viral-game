<?php require_once('config/app-config.php') ?>
<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Mrwood</title>
    <meta name="description" content="Mrwood HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 5, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">

    @style
    
    <style>
    embed{
        width: 100%;
        height: 100vh;
    }
    </style>
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary scrolled">
        <div class="left">
            <a href="#" class="headerButton" data-bs-toggle="offcanvas" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            Discover
        </div>
        <div class="right">
            <a href="#" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id="search" class="appHeader">
        <form class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Search...">
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
                <a href="#" class="ms-1 close toggle-searchbox">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

    <!-- App Capsule -->
    @content
    <!-- app footer -->
    <div class="appFooter">
        <img src="assets/img/logo.png" alt="icon" class="footer-logo mb-2">
        <div class="footer-title">
            Copyright © Mrwood <span class="yearNow"></span>. All Rights Reserved.
        </div>
        <div>Mrwood is PWA ready Mobile UI Kit Template.</div>
        Great way to start your mobile websites and pwa projects.

        <div class="mt-2">
            <a href="#" class="btn btn-icon btn-sm btn-facebook">
                <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="#" class="btn btn-icon btn-sm btn-twitter">
                <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a href="#" class="btn btn-icon btn-sm btn-linkedin">
                <ion-icon name="logo-linkedin"></ion-icon>
            </a>
            <a href="#" class="btn btn-icon btn-sm btn-instagram">
                <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="#" class="btn btn-icon btn-sm btn-whatsapp">
                <ion-icon name="logo-whatsapp"></ion-icon>
            </a>
            <a href="#" class="btn btn-icon btn-sm btn-secondary goTop">
                <ion-icon name="arrow-up-outline"></ion-icon>
            </a>
        </div>

    </div>
    <!-- * app footer -->

    </div>
    <!-- * App Capsule -->
  
       
    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="/" class="item active">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
            </div>
        </a>
        <a href="tel:00212693507604" class="item">
            <div class="col">
               <ion-icon name="call-outline"></ion-icon>
            </div>
        </a>
        <a href="page-chat.html" class="item d-none">
            <div class="col">
                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                <span class="badge badge-danger">5</span>
            </div>
        </a>
        <a href="https://www.google.com/maps/dir/Mr+Wood,+Casablanca//@33.5092221,-7.741225,12z/data=!4m8!4m7!1m5!1m1!1s0xda62d3db10e4a01:0xab1619203660f5d0!2m2!1d-7.6711841!2d33.5090987!1m0?hl=fr" target="_blank" class="item">
            <div class="col">
                <ion-icon name="location-outline"></ion-icon>
            </div>
        </a>
        <a href="#sidebarPanel" class="item" data-bs-toggle="offcanvas">
            <div class="col">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarPanel">
        <div class="offcanvas-body">
            <!-- profile box -->
            <div class="profileBox">
                <div class="image-wrapper">
                    <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged rounded">
                </div>
                <div class="in">
                    <strong>Salut Junior</strong>
                    <div class="text-muted">
                        <ion-icon name="location"></ion-icon>
                        Casablanca
                    </div>
                </div>
                <a href="#" class="close-sidebar-button" data-bs-dismiss="offcanvas">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <!-- * profile box -->

            <ul class="listview flush transparent no-line image-listview mt-2">
                <li>
                    <a href="/fidelites" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="in">
                            Fidelités
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="cube-outline"></ion-icon>
                        </div>
                        <div class="in">
                            Coupons
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/spinne-and-win" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="layers-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Jouez & gagner</div>
                            <span class="badge badge-danger d-none">5</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/mes-cadeaux" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="layers-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Mes cadeaux</div>
                            <span class="badge badge-danger">5</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/restaurant" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Restaurant</div>
                            <span class="badge badge-danger d-none">5</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/nos-produits" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Nos produits</div>
                            <span class="badge badge-danger d-none">5</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/nous-localisez" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>Nous localisez</div>
                            <span class="badge badge-danger d-none">5</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar buttons -->
        <div class="sidebar-buttons">
            <a href="#" class="button">
                <ion-icon name="person-outline"></ion-icon>
            </a>
            <a href="#" class="button">
                <ion-icon name="archive-outline"></ion-icon>
            </a>
            <a href="#" class="button">
                <ion-icon name="settings-outline"></ion-icon>
            </a>
            <a href="#" class="button">
                <ion-icon name="log-out-outline"></ion-icon>
            </a>
        </div>
        <!-- * sidebar buttons -->
    </div>
    <!-- * App Sidebar -->

    <!-- welcome notification  -->
    <div id="notification-welcome" class="notification-box">
        <div class="notification-dialog android-style">
            <div class="notification-header">
                <div class="in">
                    <img src="assets/img/icon/72x72.png" alt="image" class="imaged w24">
                    <strong>Mrwood</strong>
                    <span>just now</span>
                </div>
                <a href="#" class="close-button">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="notification-content">
                <div class="in">
                    <h3 class="subtitle">Welcome to Mrwood</h3>
                    <div class="text">
                        Mrwood is a PWA ready Mobile UI Kit Template.
                        Great way to start your mobile websites and pwa projects.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * welcome notification -->

    <!-- ============== Js Files ==============  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- ProgressBar js -->
    <script src="assets/js/plugins/progressbar-js/progressbar.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        // Trigger welcome notification after 5 seconds
        $(function() {
            var loader = document.getElementById('loader');
            setTimeout(() => {
                notification('notification-welcome', 5000);
            }, 2000);
            // embed event
            if($('embed').length > 0) {
                $('embed').on('load', function() {
                    setTimeout(() => {
                        loader.setAttribute("style", "pointer-events: none; opacity: 0; transition: 0.2s ease-in-out;");
                        setTimeout(() => {
                                loader.setAttribute("style", "display: none;")
                            }, 1000);
                        }, 450);
                    });
            }else {
                setTimeout(() => {
                loader.setAttribute("style", "pointer-events: none; opacity: 0; transition: 0.2s ease-in-out;");
                setTimeout(() => {
                        loader.setAttribute("style", "display: none;")
                    }, 1000);
                }, 450);
            }
            
            // loader
            
            // dark mode
            document.querySelector("body").classList.add("dark-mode-active");
            localStorage.setItem("MrwoodDarkMode", "1");
        })

    </script>

    @script
</body>

</html>