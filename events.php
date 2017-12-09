<?php
//Home page - one page layout
?>
<!doctype html>
<html class="no-js" lang="">
    <?php    include 'components/head.php'; ?>
    <body class="events">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <?php include 'components/header.php'; ?>
        <!-- Add your site or application content here -->
        <main id="fullpage">
            <section class="section">
                first-event
            </section>
            <section class="section">
                second-event
            </section>
            <section class="section">
                third-event
            </section>
            <div class="section fp-auto-height">
                <?php include 'components/footer.php' ?>                       
            </div>
        </main>
        
        <?php include 'components/footer.php' ?>       
        <?php include 'components/scripts.php'; ?>
        <script src="js/events-fullpage.js"></script>
    </body>
</html>