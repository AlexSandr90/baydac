$(function() {
  
    $('#slider').slick({
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 1500,
      arrows: true,
      prevArrow: '<button type="button" class="slick-prev">Previous</button>',
      nextArrow: '<button type="button" class="slick-next">Next</button>',
      swipping: true,
      swipeToSlide: true,
      cssEase: 'ease-in-out',
      asNavFor: '#slider-trumb'
    });

    $('#slider-trumb').slick({
      dots: true,
      speed: 1500,
      cssEase: 'ease-in-out',
      slidesToShow: 3,
      centerMode: true,
      centerPadding: '10px',
      arrows: true,
      asNavFor: '#slider',
      focusOnSelect: true
    });

    $('.menu, .footer, .copyright').before('<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border brdr-top"></div>');
    $('.menu').after('<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border brdr-top"></div>');
   

    $('#menu li a').each( function() {
     let location = window.location.href;
     let link = this.href;
     if( location == link) {
        $(this).attr('id', 'active');
     }
    });
    


    
    $('#pregrant-item').on('click', function(){
      window.location.href='photo-wall-pregnant_women.php';
    });

    $('#up_to_a_year_children-item').on('click', function(){
      window.location.href='photo-wall-up_to_a_year_children.php';
    });

    $('#yearlings_children-item').on('click', function(){
      window.location.href='photo-wall-yearlings_children.php';
    });

    $('#newborn-item').on('click', function(){
      window.location.href='photo-wall-newborn.php';
    });    
    // $('.logo-info h3').inner('Lorem ipsum dolor sit amet.');
    


    
});