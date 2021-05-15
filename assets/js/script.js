$(document).ready(function() {
     $(window).enllax();
     var slickMobile = $('#sliderMobile .slider').slick({
          dots: false,
          arrows: false,
          infinite: false,
          slidesToShow: 1,
          adaptiveHeight: true,
          mobileFirst: true,
         responsive: [
               {
                    breakpoint: 991,
                    settings: 'unslick'
               }
         ]
     });

     $('.seta.next').click(function() {
          slickMobile.slick('slickNext');
     });
     $('.seta.prev').click(function() {
          slickMobile.slick('slickPrev');
     });
     $('#mauticform_input_encontrospesquisa_submit').click(function() {
          $('.mauticform-has-error').removeClass('mauticform-has-error');
     });

     $(window).on('resize', function() {
          $('#sliderMobile .slider').slick('resize');
     });

     $('#mauticform_input_encontrospesquisa_data_de_nascimento1').mask('00/00/0000');
     $('#mauticform_input_questionariofinalprojetociclos_data_de_nascimento1').mask('00/00/0000');
});