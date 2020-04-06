<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href=<?= base_url("assets/images/mbr-122x122.png")?> type="image/x-icon">
  <meta name="description" content="Web Site Maker Description">
  
  
  <title>Home</title>

  <link rel="stylesheet" href=<?= base_url("assets/web/assets/mobirise-icons/mobirise-icons.css")?>>
  <link rel="stylesheet" href=<?= base_url("assets/bootstrap/css/bootstrap.min.css")?>>
  <link rel="stylesheet" href=<?= base_url("assets/bootstrap/css/bootstrap-grid.min.css")?>>
  <link rel="stylesheet" href=<?= base_url("assets/bootstrap/css/bootstrap-reboot.min.css")?>>
  <link rel="stylesheet" href=<?= base_url("assets/tether/tether.min.css")?>>
  <link rel="stylesheet" href=<?= base_url("assets/animatecss/animate.min.css")?>>
  <link rel="stylesheet" href=<?= base_url("assets/dropdown/css/style.css")?>>
  <link rel="stylesheet" href=<?= base_url("assets/theme/css/style.css")?>>
  <link rel="preload" as="style" href=<?= base_url("assets/mobirise/css/mbr-additional.css")?>>
  <link rel="stylesheet" href=<?= base_url("assets/mobirise/css/mbr-additional.css")?> type="text/css">
  
  
  
</head>
<body>
    

<section class="engine"><a href="https://mobirise.info/q">website templates</a></section><section class="header1 cid-rVeUxXkOhb mbr-fullscreen mbr-parallax-background" id="header1-a">

    
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(91, 104, 107);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">Selamat Datang</h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-1"><em>di</em></h3>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-2">
                    Website Saya</p>
                
            </div>
        </div>
    </div>

</section>

<section class="mbr-section article content9 cid-rVeWz0k3pr" id="content9-d">
    
     

    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-fonts-style display-5">
                    Ini adalah sebuah website yang mengimplementasikan REST API dan digunakan untuk memenuhi UTS</div>
            <hr class="line" style="width: 25%;">
        </div>
        </div>
</section>

<section class="services5 cid-rVeXTa21KB" id="services5-h">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        <div class="row">
            <!--Titles-->
            <div class="title pb-5 col-12">
                <h2 class="align-left mbr-fonts-style m-0 display-1">
                    Menu List
                </h2>
                
            </div>
            <?php foreach ($datamenu as $mnu){
                $format =$english_format_number = number_format($mnu->price, 2, ',', ' ');
                    echo '<div class="card px-3 col-12">
                    <div class="card-wrapper media-container-row media-container-row">
                        <div class="card-box">
                            <div class="top-line pb-3">
                                <h4 class="card-title mbr-fonts-style display-5">
                                '.$mnu->nama.'</h4>
                                <p class="mbr-text cost mbr-fonts-style m-0 display-5">Rp '.$format.'</p>
                            </div>
                            <div class="bottom-line">
                                
                            </div>
                        </div>
                    </div>
                </div>';
                    
                }?>
            <!--Card-1-->
            <!-- <div class="card px-3 col-12">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <div class="top-line pb-3">
                            <h4 class="card-title mbr-fonts-style display-5">
                                Nasi Goreng</h4>
                            <p class="mbr-text cost mbr-fonts-style m-0 display-5">Rp20.000</p>
                        </div>
                        <div class="bottom-line">
                            
                        </div>
                    </div>
                </div>
            </div>
         
            <!--Card-7-->
            
            <!--Card-8-->
            
            <!--Card-9-->
            
            <!--Card-10-->
            
            <!--Card-11-->
            
            <!--Card-12-->
            
        </div>
    </div>
</section>


  <script src=<?= base_url("assets/web/assets/jquery/jquery.min.js")?>></script>
  <script src=<?= base_url("assets/popper/popper.min.js")?>></script>
  <script src=<?= base_url("assets/bootstrap/js/bootstrap.min.js")?>></script>
  <script src=<?= base_url("assets/tether/tether.min.js")?>></script>
  <script src=<?= base_url("assets/smoothscroll/smooth-scroll.js")?>></script>
  <script src=<?= base_url("assets/touchswipe/jquery.touch-swipe.min.js")?>></script>
  <script src=<?= base_url("assets/viewportchecker/jquery.viewportchecker.js")?>></script>
  <script src=<?= base_url("assets/parallax/jarallax.min.js")?>></script>
  <script src=<?= base_url("assets/dropdown/js/nav-dropdown.js")?>></script>
  <script src=<?= base_url("assets/dropdown/js/navbar-dropdown.js")?>></script>
  <script src=<?= base_url("assets/theme/js/script.js")?>></script>
  
  
  <input name="animation" type="hidden">
   <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
  </body>
</html>