<?php
//Home page - one page layout
//path to the folder that contains the pictures    
$sti = 'img/photobox/';
$pictures = array();
if(file_exists($sti))
{
    //Filter "." and ".." from the array and return only the pictures names
    $pictures = array_filter(scandir($sti,1), 
                            function ($item) {
                            return '.' !== $item[0];
                            }
                    );    
}
?>
<!doctype html>
<html class="no-js" lang="">
    <?php    include 'components/head.php'; ?>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <?php include 'components/header.php'; ?>
        <main id="fullpage">
            <section class="section">                
                <!-- Home page -->                                
                <div class="home-wrap">                    
                    <img class="banner" src="img/banner.png" alt="banner">                    
                    <a href="#events" class="button" id="button">Read more</a> 
                </div>
                <!-- Home pgage Ends -->                                                          
            </section>
            <section class="artist-section section">
                <!-- Artists -->
                <div class="artist-container">
                    <div class="artist-details top-middle">
                        <img src="img/lars.png" alt="">
                        <p>Lars Larsen - guide in museum inspired by historical and artistic environment. Since he was 25 years old, he found that the best way to take his emotions away is to shape hand-craft art. Since Lars has more than ten years experience, he is confident enough to share his work at Kalibar!</p>
                    </div>
                    <div class="artist-details bottom-left">
                        <p>
                            Wooden hand-crafts of smaller size sculptures, statues, reflections. High attention to detail, home made, high quality material, inspired by Aarhus and Denmark surroundings art.
                        </p>
                    </div>
                    <div class="artist-details bottom-right">
                        <div class="wrap">
                            <div id="arrow-left" class="arrow"></div>
                            <div id="slider">
                                <div class="slide slide1">
                                    
                                </div>
                                <div class="slide slide2">
                                    
                                </div>
                                <div class="slide slide3">
                                    
                                </div>
                            </div>
                            <div id="arrow-right" class="arrow"></div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <section class="section about-section">
                <div class="about-container">
                    
                    <div class="img-wrap-aboutus">
                        <img class="image-aboutus" src="img/kalibar_about.jpg">
                    </div>
                    <h1 class="title-aboutus">About us</h1>                    
                    <p class="aboutus">
                        During the last months we have worked hard to get ready with a new concept. It is called KALIBAR, and it’s the first art auction bar in Aarhus. We believe that Aarhus provides unique opportunities for addressing many different art forms. Our KALIBAR serves as a resource for promoting and disseminating ideas, creating community, and improving the places we live. We are inspired by young and talented people in Aarhus. We want to give them a place where they can express themselves and show their talent.
                    </p>
                </div>
            </section>
            <section class="section">
                <h1 class="gallery-title">Gallery</h1>
                <div class="gallery cf">
                    <div>
                        <img class="gallery-img" src="img/pic1.jpg"/>
                    </div>
                    <div>
                        <img class="gallery-img" src="img/pic2.jpg"/>
                    </div>
                    <div>
                        <img class="gallery-img" src="img/pic3.jpg"/>
                    </div>
                    <div>
                        <img class="gallery-img"src="img/pic4.jpg"/>
                    </div>
                </div>
            </section>
            <section class="section">
                <!-- Events -->
            </section>
            <section class="section photobox">
                <!-- Photobox -->
                <h1>Photobox</h1>
                <p>You are welcome to leave your “signature” – your piece of art<br>on the wall in the bar and take a picture of it. Take a picture of yourself<br>and your friends while you are enjoying your time in our Kalibar!</p>
                <p>Click on camera and start :)</p>
                <i class="fa fa-camera-retro" id="open-ph-modal"></i>
                <div class="photobox-slider">
                    <?php foreach($pictures as $key => $picture): ?>
                        <?php 
                        // The path of the picture is made by adding the path of the folder 
                        // Fotorama usage: <a> = Displays picture with full size
                        // <img> displays the thumbnail of the picture with the defined width and height
                        ?>
                    <div><img src="<?php echo $sti . $picture ?>" alt="<?php echo "gallery image N.".$key; ?>"></div>
                    <?php endforeach; ?>
                </div>
            </section>
            <section class="section">
                
                
                <h1 style=" color:white; text-align: center;" >Contact us!</h1>
                <h2 style=" color: white;text-align: center" >Mobile: 45222222<br>
                    Email: KalibarAarhus@gmail.com</h2>
                
                <!-- Find Us Google maps Starts -->
                
                <iframe width="100%" height="600px" frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/search?q=Klostertorvet+5,+8000+Aarhus,+Denmark&key=AIzaSyCorhMR-Y552ZXIrufua-DbnZJETsBjsJI" allowfullscreen></iframe>
                
                <!-- Find Us Google maps Ends -->
                
                
                
            </section>
            <div class="section fp-auto-height">
                <?php include 'components/footer.php' ?>                       
            </div>
        </main>
        <!-- Modals -->
        <div class="modal-container" id="ph-modal" style="display: none;">
            <i class="modal-close-icon fa fa-times" id="close-ph-modal"></i>
            <div class="photo-frame" id="video-feed">
                <video autoplay="false" id="videoElement"></video>                
                <div class="circle-btn" id="take-picture"></div>
            </div>
            <canvas id="photo" style="display: none;"></canvas>
        </div>
        <?php include 'components/scripts.php'; ?>
        <script src="js/home-fullpage.js"></script>        
    </body>
</html>
