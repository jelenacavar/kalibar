<?php
//Home page - one page layout
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
                first
            </section>
            <section class="section">
                second
            </section>
            <section class="section">
                third
            </section>
            <section class="section">
                fourth
            </section>
            <section class="section">
                fifth
            </section>
            <section class="section">
                sixth
            </section>
            <div class="section fp-auto-height">
                <?php include 'components/footer.php' ?>                       
            </div>
        </main>
            
        <?php include 'components/scripts.php'; ?>
        <script src="js/home-fullpage.js"></script>
    </body>
</html>