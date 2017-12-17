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
<html class="no-js" lang="en">
    <?php    include 'components/head.php'; ?>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <?php include 'components/header.php'; ?>
        <main id="fullpage">
            <section class="section">                
                <!-- Home page -->
                <h1 class="section-title">Home</h1>
                <div class="home-wrap">                    
                    <img class="banner" src="img/banner.png" alt="banner">                    
                    <a href="#events" class="button" id="button">Read more</a> 
                </div>
                <!-- Home pgage Ends -->                                                          
            </section>
            <section class="artist-section section">
                <!-- Artists -->
                <h1 class="section-title">Artists</h1>
                <div class="artist-container">
                    <div class="artist-details top-middle">
                        <h1>Meet Lars, artist that will exhibit in our bar this month.</h1>
                    </div> 
                    <div class="artist-details bottom-left">
                        <p>
                            His work is connected to wooden hand-crafts of smaller size sculptures and reflections. He gives high attention to the detail. Art is inspired by Aarhus and Denmark surroundings art.
                        </p>
                    </div>
                    <div class="artist-details bottom-right">
                        <div class="wrap slide-content">
                            <div class='slide-custom slide1'>
                                <img class="img-responsive" src="img/pic1_1.jpg" alt="sculpture" >
                            </div>
                            <div class="slide-custom slide2">
                                <img class="img-responsive" src="img/pic2_1.jpg" alt="sculpture" >
                            </div>
                            <div class='slide-custom slide3'>
                                <img class="img-responsive" src="img/pic3_1.jpg" alt="sculpture" >
                            </div>
                        </div>
                    </div>                        
                </div>
            </section>
            <section class="section about-section">
                <div class="about-container">
                    <div class="about-text-wrap">
                        <h1 class="title-aboutus">About us</h1>                    
                        <p class="aboutus">
                            During the last months we have worked hard to get ready with a new concept. It is called KALIBAR, and it’s the first art auction bar in Aarhus. We believe that Aarhus provides unique opportunities for addressing many different art forms. Our KALIBAR serves as a resource for promoting and disseminating ideas, creating community, and improving the places we live. We are inspired by young and talented people in Aarhus. We want to give them a place where they can express themselves and show their talent.
                        </p>
                    </div>
                </div>
            </section>
            <section class="section">
                <h1 class="gallery-title">Gallery</h1>
                <div class="gallery cf">
                    <div>
                        <img class="gallery-img" src="img/pic1.jpg" alt="Kalibar gallery first image"/>
                    </div>
                    <div>
                        <img class="gallery-img" src="img/pic2.jpg" alt="Kalibar gallery second image"/>
                    </div>
                    <div>
                        <img class="gallery-img" src="img/pic3.jpg" alt="Kalibar gallery third image"/>
                    </div>
                    <div>
                        <img class="gallery-img" src="img/pic4.jpg" alt="Kalibar gallery fourth image"/>
                    </div>
                    <div>
                        <img class="gallery-img" src="img/pic5.png" alt="Kalibar gallery fifth image"/>
                    </div>
                    <div>
                        <img class="gallery-img" src="img/pic6.jpg" alt="Kalibar gallery sixth image"/>
                    </div>
                </div>
            </section>
            <section class="section">
                <h1 class="title-events">Events</h1>
                <div class="event-slider">
                    <div class="slide">
                        <div class="intro">
                            <img class="img-responsive" src="img/banner.png" alt="banner">
                            <p>The heat for different experiences such us live music, reading, design,film shows and what we otherwise find out when we travel into the great art work. Come and remind yourself how we did it before. We can't wait to see you!</p>
                        </div>
                        
                    </div>
                    <div class="slide">
                        <div class="intro">
                            <img class="img-responsive" src="img/banner1.png" alt="banner">
                            <p>We offer you a variety of the cocktails. Bring your friends and enjoy one of the cocktails made by our barman. We also prepared our stage for jam session night. We are waiting for you!  </p>
                        </div>
                    </div>                    
                </div>
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
                        ?>
                        <div>
                            <img src="<?php echo $sti . $picture ?>" alt="<?php echo "gallery image N.".$key; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
            <section class="findus-section section">
                <h1>Find us!</h1>
                <p>
                    <i class="fa fa-phone"></i> 45222222<br>
                    <i class="fa fa-envelope"></i> KalibarAarhus@gmail.com
                </p>
                
                <!-- Find Us Google maps Starts -->
                <div class="map">
                    <iframe style="border:0; width: 100%; height: 100%;" src="https://www.google.com/maps/embed/v1/search?q=Klostertorvet+5,+8000+Aarhus,+Denmark&key=AIzaSyCorhMR-Y552ZXIrufua-DbnZJETsBjsJI" allowfullscreen></iframe>
                </div>
                
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
                <video id="videoElement"></video>                
                <canvas id="photo" style="display: none;"></canvas>
                <i class="fa fa-check approval-icons" id="save-picture"></i>
                <i class="fa fa-times approval-icons" id="refuse-picture"></i>
                <div class="circle-btn" id="take-picture"></div>
            </div>
        </div>
        <?php include 'components/scripts.php'; ?>      
    </body>
</html>
