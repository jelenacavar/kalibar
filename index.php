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
        <!-- Add your site or application content here -->
        <?php include 'components/header.php'; ?>
        <main id="fullpage">
            <section class="section">                
                <!-- Home page -->
                
                
                <div>
                    <img class="homepic" style="width: 1900px;" src="https://static1.squarespace.com/static/56b1362af8baf3f55713dba7/t/59cabd2aedaed88c86680708/1506458928146/8435293722_d7da782a88_b.jpg?format=1500w" alt="mid">
                    
                    <img class="banner" style="max-width: 100%; height: 32%;   position: absolute; top: 55%;" src="banner.png" alt="ban">
                    
                    <enter><a href="#" class="button" id="button" style="  color: white; position: absolute; top: 90%; left: 20%;  padding: 25px 50px; background-color: #5ca370; text-decoration: none; border-radius: 8px; transform: translateY(-50%);">More info</a></enter>
                
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
            <section class="section">
                <!-- About -->
            </section>
            <section class="section">
                <!-- Gallery -->
            </section>
            <section class="section">
                <!-- Events -->
            </section>
            <section class="section photobox">
                <!-- Photobox -->
                <h1>Photobox</h1>
                <p>Take a pictures of yourself here at kalibar!</p>
                <p>We display all the picture below.</p>
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