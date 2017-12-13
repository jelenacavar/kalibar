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
            </section>
            <section class="artist-section section">
                <!-- Artists -->
                <div class="artist-container">
                    <div class="artist-details top-middle">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="artist-details bottom-left">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="artist-details bottom-right">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
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
                <!-- Find Us -->
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