jQuery(document).ready(function($) {
    //SCRIPT WOW
    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0, // distance to the element when triggering the animation (default is 0)
        mobile: true, // trigger animations on mobile devices (default is true)
        live: true, // act on asynchronously loaded content (default is true)
        callback: function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null // optional scroll container selector, otherwise use window
    });
    wow.init();
    //TERMINA SCRIPT WOW
});

// INICIA SCRIPT PLAYER
$(document).on('click', '.js-videoPoster', function(ev) {
    ev.preventDefault();
    var $poster = $(this);
    var $wrapper = $poster.closest('.js-videoWrapper');
    videoPlay($wrapper);
});

// play the targeted video (and hide the poster frame)
function videoPlay($wrapper) {
    var $iframe = $wrapper.find('.js-videoIframe');
    var src = $iframe.data('src');
    // hide poster
    $wrapper.addClass('videoWrapperActive');
    // add iframe src in, starting the video
    $iframe.attr('src', src);
}

// stop the targeted/all videos (and re-instate the poster frames)
function videoStop($wrapper) {
    // if we're stopping all videos on page
    if (!$wrapper) {
        var $wrapper = $('.js-videoWrapper');
        var $iframe = $('.js-videoIframe');
        // if we're stopping a particular video
    } else {
        var $iframe = $wrapper.find('.js-videoIframe');
    }
    // reveal poster
    $wrapper.removeClass('videoWrapperActive');
    // remove youtube link, stopping the video from playing in the background
    $iframe.attr('src', '');
}
// TERMINA SCRIPT PLAYER

// INCIA SCRIPT TOOLTIP
//$(document).ready(function(){
//    $('[data-toggle="tooltip"]').tooltip({
//      animation: true,
//      delay: {show: 300, hide: 100}
//    });
//    $('button').on('mousedown', function(){
//      $('[data-toggle="tooltip"]').tooltip('show');
//    });
//    $('[data-toggle="tooltip"]').on('mouseleave', function(){
//      $('[data-toggle="tooltip"]').tooltip('hide');
//    });
//});

// TERMINA SCRIPT TOOLTIP

// INCIA SCRIPT TOOLTIP
$(document).ready(function() {
    var starRatingControls = new StarRating('.star-rating');
    var starRatingControls2 = new StarRating('.star-rating2');
    $('[data-toggle="popover"]').popover();
});
// TERMINA SCRIPT TOOLTIP

//INICIA SCRIPT EMOTICONE
jQuery(document).ready(function($) {
    // emojis 😁! See #password5 for more details
    emojione.imageType = 'svg';
    emojione.sprints = true;
    emojione.imagePathSVGSprites = 'https://github.com/Ranks/emojione/raw/master/assets/sprites/emojione.sprites.svg';

    // Showing the progress bar since the first moment.
    $('#password').password({
        animate: false
        // Check out the readme or directly jquery.password.js
        // for a detailed list of properties.
    });

    // Default behavior
    $('#default').password();

    // Linked to username input
    $('#linked').password({
        username: '#username',
        showPercent: true
    });

    // Custom events (enables button on certain score)
    // Check the readme for a detailed list of events
    $('#submit').attr('disabled', true);
    $('#events').password().on('password.score', function(e, score) {
        if (score > 75) {
            $('#submit').removeAttr('disabled');
        } else {
            $('#submit').attr('disabled', true);
        }
    });

    // Change translations
    $('#translations').password({
        animate: false,
        minimumLength: 6,
        enterPass: emojione.unicodeToImage('Escribe tu contraseña 🔏'),
        shortPass: emojione.unicodeToImage('¡Lo puedes hacer mejor! 🤕'),
        badPass: emojione.unicodeToImage('¡Aún necesitas reforzarla! 😷'),
        goodPass: emojione.unicodeToImage('¡Mucho mejor, ya casi! 👍'),
        strongPass: emojione.unicodeToImage('¡Excelente, lo lograste! 🙃'),
    });
});
//TERMINA SCRIPT EMOTICONE

//SCRIPT PRELOADER
$(window).load(function() { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
    /*	$('body').delay(100).css({'overflow':'visible'});*/
})
//TERMINA SCRIPT PRELOADER

// jQuery for page scrolling feature - requires jQuery Easing plugin
$('a.page-scroll').bind('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: ($($anchor.attr('href')).offset().top - 30)
    }, 1250, 'easeInOutExpo');
    event.preventDefault();
});


function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("Text", ev.target.id);
}

var cont = 0;

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("Text");

    //console.log(data);
    if (data == 'drag2' || data == 'drag4' || data == 'drag6' || data == 'drag8' || data == 'drag10') {
        $('#incorrecto').modal('show');
    } else {
        cont++;
        ev.target.appendChild(document.getElementById(data));
        if (cont == 5) {
            $('#correcto').modal('show');
        }

    }

}



//jQuery(document).ready(function($){
//
//	projectsContainer.on('click', '.scroll', function(){
//		projectsContainer.animate({'scrollTop':$(window).height()}, 500);
//	});
//
//});

$(document).ready(function() {
    $('.datepicker').datepicker({
        language: 'es'
    });
});

$(document).ready(function() {

    $(".cd-modal-trigger").click(function() {
        $('body').addClass('hiddenOverflow');
    });

    $(".modal-close").click(function() {
        $('body').removeClass('hiddenOverflow');
    });
});


jQuery(document).ready(function($) {

    $("#bidi-digital .retro").hide();
    $("#bidi-digital").submit(function(e) {
        e.preventDefault();
        var error = false;
        $("input", this).each(function() {
            //console.log($(this).val());
            if ($(this).val() == "") {
                error = true;
            }
        });
        console.log(error);
        if (error == false) {
            $("#bidi-digital .retro").show("slow");
        } else if (error == true) {
            $('#myModalRetro').modal('show');
        }
        //console.log($inputs);


    });

    $('#cfinal').submit(function(event) {
        event.preventDefault();
        emailAddress = $('#cfinal input').val();
        var emailRegex = new RegExp(/^([\w\.\-]+)@(alumno.cch.unam.mx)$/i);
        var valid = emailRegex.test(emailAddress);
        if (!valid) {
            alert("¡Direccion de Correo electronico incorrecta!");
            return false;
        } else {
            window.location.replace("https://herramientastic.cch.unam.mx/cuestionario");
        }
    });
});
