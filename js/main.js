var globalStream = null;
$(document).ready(function() {
    //Custom Js
    $('#mobile-nav').click(function(){
        $('#menu').toggleClass('active');
    });
    $('#menu a, .close-icon').click(function(){
        $('#menu').removeClass('active');
    });
    $('#open-ph-modal').click(function(){
        showModal('#ph-modal');
    }); 
    $('#close-ph-modal').click(function(){
        hideModal('#ph-modal');
    });    
    function showModal(id){
        $(id).show();
        $('#fp-nav').hide();
        startVideoFeed();
    }
    function hideModal(id){
        $(id).hide();
        $('#fp-nav').show();
        
        if(globalStream)
        {
            var track = globalStream.getTracks()[0];            
            track.stop();
        }
    }
    
    function startVideoFeed(){  
        console.log("Start video feed");
        var video = document.querySelector("#videoElement");
        
        navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;
        var videoFeed = document.querySelector("#video-feed");
        var camWidth = videoFeed.offsetWidth;
        var camHeight = camWidth;
        if (navigator.getUserMedia) {       
            navigator.getUserMedia({video: { width: camWidth, height: camHeight }}, handleVideo, videoError);
        }
        
        function handleVideo(stream) {
            globalStream = stream;
            video.src = window.URL.createObjectURL(stream);
        }
        
        function videoError(e) {
            // do something
            console.log("cannot use video feed");
            console.log(e);
        }
        
        var button = document.getElementById("take-picture");
        var canvas = document.getElementById("photo");  
        canvas.height = camHeight;
        canvas.width = camWidth;
        button.addEventListener('click', function(){
            video.pause();
            $('.approval-icons').show();
            button.style.display = 'none';
            convertVideoToCanvas(canvas, video, camWidth, camHeight, button);
        });
        
    }
    function convertVideoToCanvas(canvas, video, camWidth, camHeight, button) {
        canvas.getContext("2d").drawImage(video, 0, 0, camWidth, camHeight, 0, 0, camWidth, camHeight);
        var img = canvas.toDataURL("image/png");
        
        $('#save-picture').click(function(){
            saveImageFile(img);
        });
        $('#refuse-picture').click(function(){
            $('.approval-icons').hide();
            button.style.display = 'block';
            video.play();
        });
    };
    
    function saveImageFile(img){
        $.ajax({
            type: "POST",
            url: "photobox.php",
            data: { 
                imgBase64: img
            }
        }).done(function(o) {
            setTimeout(function(){
                location.reload();
            }, 200);                        
        });        
    }
    $('.photobox-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        centerMode: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });
});