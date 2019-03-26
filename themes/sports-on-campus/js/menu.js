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
    $('.basketball-menu').on('click', function() {
      $('.basketball-menu p').addClass('orange-underscore');
      $('.rugby-menu p').removeClass('orange-underscore');
      $('.other-menu p').removeClass('orange-underscore');
      $('.soccer-menu p').removeClass('orange-underscore');
      $('.volleyball-menu p').removeClass('orange-underscore');
      select = 'Basketball';
    });
    $('.rugby-menu').on('click', function() {
      $('.basketball-menu p').removeClass('orange-underscore');
      $('.rugby-menu p').addClass('orange-underscore');
      $('.other-menu p').removeClass('orange-underscore');
      $('.soccer-menu p').removeClass('orange-underscore');
      $('.volleyball-menu p').removeClass('orange-underscore');
      select = 'Rugby';
    });
    $('.other-menu').on('click', function() {
      $('.basketball-menu p').removeClass('orange-underscore');
      $('.rugby-menu p').removeClass('orange-underscore');
      $('.other-menu p').addClass('orange-underscore');
      $('.soccer-menu p').removeClass('orange-underscore');
      $('.volleyball-menu p').removeClass('orange-underscore');
      select = 'Other';
    });
    $('.soccer-menu').on('click', function() {
      $('.basketball-menu p').removeClass('orange-underscore');
      $('.rugby-menu p').removeClass('orange-underscore');
      $('.other-menu p').removeClass('orange-underscore');
      $('.soccer-menu p').addClass('orange-underscore');
      $('.volleyball-menu p').removeClass('orange-underscore');
      select = 'Soccer';
    });
    $('.volleyball-menu').on('click', function() {
      $('.basketball-menu p').removeClass('orange-underscore');
      $('.rugby-menu p').removeClass('orange-underscore');
      $('.other-menu p').removeClass('orange-underscore');
      $('.soccer-menu p').removeClass('orange-underscore');
      $('.volleyball-menu p').addClass('orange-underscore');
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
