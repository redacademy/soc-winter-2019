(function($) {
  $(function() {
    $('.choose-sport-menu').on('change',function (){
      const sectionName = $(this).val();
      console.log(sectionName);
      if(sectionName!=='Choose an option'){
        location.href =$('.'+sectionName+'-menu').attr('linkinfo');
      }
    });
    $('.main-carousel').flickity({
      cellAlign: 'left',
      contain: true
    });

    //front page sport select
    let select = '';
    $('.Basketball-menu').on('click', function() {
      $('.Basketball-menu p').addClass('orange-underscore');
      $('.Rugby-menu p').removeClass('orange-underscore');
      $('.Other-menu p').removeClass('orange-underscore');
      $('.Soccer-menu p').removeClass('orange-underscore');
      $('.Volleyball-menu p').removeClass('orange-underscore');
      select = 'Basketball';
    });
    $('.Rugby-menu').on('click', function() {
      $('.Basketball-menu p').removeClass('orange-underscore');
      $('.Rugby-menu p').addClass('orange-underscore');
      $('.Other-menu p').removeClass('orange-underscore');
      $('.Soccer-menu p').removeClass('orange-underscore');
      $('.Volleyball-menu p').removeClass('orange-underscore');
      select = 'Rugby';
    });
    $('.Other-menu').on('click', function() {
      $('.Basketball-menu p').removeClass('orange-underscore');
      $('.Rugby-menu p').removeClass('orange-underscore');
      $('.Other-menu p').addClass('orange-underscore');
      $('.Soccer-menu p').removeClass('orange-underscore');
      $('.Volleyball-menu p').removeClass('orange-underscore');
      select = 'Other';
    });
    $('.Soccer-menu').on('click', function() {
      $('.Basketball-menu p').removeClass('orange-underscore');
      $('.Rugby-menu p').removeClass('orange-underscore');
      $('.Other-menu p').removeClass('orange-underscore');
      $('.Soccer-menu p').addClass('orange-underscore');
      $('.Volleyball-menu p').removeClass('orange-underscore');
      select = 'Soccer';
    });
    $('.Volleyball-menu').on('click', function() {
      $('.Basketball-menu p').removeClass('orange-underscore');
      $('.Rugby-menu p').removeClass('orange-underscore');
      $('.Other-menu p').removeClass('orange-underscore');
      $('.Soccer-menu p').removeClass('orange-underscore');
      $('.Volleyball-menu p').addClass('orange-underscore');
      select = 'Volleyball';
    });
    $('.front-page-search').on('click', function() {
     if(select!==''){
      location.href =$('.'+select+'-menu p').attr('linkinfo'); 
    }
    
    });

  });
 

 
  $('.mobile-slide li:nth-child(1)').on('click', function() {
    $('.mobile-slide li:nth-child(1)').addClass('orange-underline');
    $('li:nth-child(2)').removeClass('orange-underline');
    $('li:nth-child(3)').removeClass('orange-underline');
  });
  $('.mobile-slide li:nth-child(2)').on('click', function() {
    $('li:nth-child(1)').removeClass('orange-underline');
    $('.mobile-slide li:nth-child(2)').addClass('orange-underline');
    $('li:nth-child(3)').removeClass('orange-underline');
    
  });
  $('.mobile-slide li:nth-child(3)').on('click', function() {
    $('li:nth-child(1)').removeClass('orange-underline');
    $('.mobile-slide li:nth-child(3)').addClass('orange-underline');
    $('li:nth-child(2)').removeClass('orange-underline');
    
  });

  if (jQuery('body').hasClass('single-university')) {
    $('nav').addClass('half-transparent');
  }
 

})(jQuery);
