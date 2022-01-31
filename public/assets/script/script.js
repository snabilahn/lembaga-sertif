$(function() {
    // expand item penjelasan sertif di page sertif
    $('.list-unstyled').click(function() {
        let $readMore = $(this).find('.answer');
        let $penjelasan = $(this).find('.card-text');

        if ($readMore.hasClass('open')) {
            $readMore.removeClass('open');
            // Use the slideUp() method to hide $answer
            $readMore.slideUp();
            $penjelasan.css("display", "");
            $(this).find('span').text('Read More');
        } else {
            $readMore.addClass('open');
            // Use the slideDown() method to show $answer
            $readMore.slideDown();
            $penjelasan.css("display", "none");
            $(this).find('span').text('Close');
        }
    });

    //Get the button
    let mybutton = document.getElementById("btn-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
        ) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
    });

    $('#btn-to-top').click(function(){
        $('html, body').animate({
            'scrollTop':0
        }, 300);
    })