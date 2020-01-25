$(function(){


    /*
      ----------------------
      Search-Button
       -------------------
     */

     $('.icons').click(function(){
        $('#search-box').toggleClass('active');
     });
  
     /* 
     ----------------------------
     add class active to clicked li
     ----------------------------
     */

      $('.game-day li').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
        var id = $(this).data('id');
        $(id).show().siblings().hide();
      });

        /* 
        ------------------------
        show/hide search box
        ------------------------
       */

      $('span.ser').click(function(){
        if($(this).find('i').hasClass('fa-search')) {
          $(this).find('i').removeClass('fa-search').addClass('fa-close');
        } else {
          $(this).find('i').removeClass('fa-close').addClass('fa-search');
        }
        $(' .searchform form').toggleClass('active');
      });
  
      /* 
      ------------------------
      Trigger sliders
      ------------------------
     */

     $('.teamContent').owlCarousel({
        nav:false,
        loop:true,
        responsive:{
          0:{
            items:1
          },
          700:{
            items:2
          },
          1000:{
            items:3
          }
        }
      });


      $('.al-slider').owlCarousel({
       nav:false,
       dots:false,
       autoplay:true,
       loop:true,
       responsive :{
        0:{
          items:1,
          stagePadding:50
        },
        600:{
          items:1,
          stagePadding:100
        },
        1000:{
          items:1,
          stagePadding:200
        },
        1200:{
          items:1,
          stagePadding:300
        }
       }
     });
      $('.sliderA span.next').click(function(){
          $('.al-slider .owl-next').click();
      });
      $('.sliderA span.prev').click(function(){
        $('.al-slider .owl-prev').click();
      });
      $('.parteners ul').owlCarousel({
        items:5,
        autoplay:true,
        loop:true
      });
       $('.teamSlider').owlCarousel({
       nav:false,
       dots:false,
       autoplay:true,
       loop:true,
       responsive:{
        0:{
          items:2,
          dots:true
        },
        600:{
          items:4,
        },
        1000:{
          items:5
        },
        1200:{
          items:6
        }
       }
     });
     $('#albumShow > div >div').owlCarousel({
       items:1,
       nav:false,
       dots:false,
       loop:true
     });
     $('#albumShow span.next').click(function(){$('#albumShow .owl-next').click();});
     $('#albumShow span.prev').click(function(){$('#albumShow .owl-prev').click();});
     $('#albumShow span').click(function(){$(this).parent().removeClass('active');});
     
      $('.albumSlider > div').owlCarousel({
        nav:false,
        dots:false,
        loop:true,
        responsive:{
          0:{
            items:3
          },
          700:{
            items:4
          },
          1000:{
            items:6
          }
        }
      });
      $('.albumSlider span.next').click(function(){
        $('.albumSlider .owl-next').click();
      });
         $('.albumSlider span.prev').click(function(){
        $('.albumSlider .owl-prev').click();
      });
     $('.mySlider').owlCarousel({
          
          loop:true,
          autoplay:true,
          nav:false,
          dots:false,
          items:1
    
     });
     $('.slider span.next').click(function(){
       $('.slider .owl-next').click();
     });
    $('.slider span.prev').click(function(){
       $('.slider .owl-prev').click();
     });
  
  
     
      $('.albumSlider > div').owlCarousel({
          items:1,
          loop:true,
          autoplay:true,
          nav:false,
          dots:false
      });     
       $('.clicks span.next').click(function(){
        $('.albumSlider .owl-next').click();
     });

      $('.clicks span.prev').click(function(){
        $('.albumSlider .owl-prev').click();
     });


    $('.alb-slider > div').owlCarousel({
          items:1,
          loop:true,
          autoplay:true,
          nav:false,
          dots:false
      });     
       $('.gal span.next').click(function(){
        $('.alb-slider .owl-next').click();
     });

      $('.gal span.prev').click(function(){
        $('.alb-slider .owl-prev').click();
     });
   
       // show/hide album in single post
          var gallary = $('#gallery');
        $('#showAlbum').on('click',function(){
          gallary.addClass('active');
        });
        $('#gallery > span').on('click',function(){
          gallary.removeClass('active');
        });

      /*
        ----------------------
        Single Album 
         -------------------
       */

       $('.allImages > div').click(function(){
          var srcImage = $(this).find('img.hidden').attr('src');
          $('#albumShow').addClass('active');
          $('#albumShow div').html('<img src="'+srcImage+'" />');
       });

     /* 
      ------------------------
      Break news 
      ------------------------
     */


    $(window).scroll(function(){
      if( $(window).scrollTop() > 100 ) {
        $('.mainHeader').addClass('fix');
      }
      if( $(window).scrollTop() < 100 ) {
        $('.mainHeader').removeClass('fix');
      }
     });

       /* 
      ------------------------
      Mobile edits
      ------------------------
     */
       var ourMenu = $('.hidden-list');
      $('nav .menu > span').on('click',function(){
        ourMenu.toggleClass('active');
        $(this).toggleClass('active');
          if( $(this).find('i').hasClass('fa-bars') ) {
              $(this).find('i').attr('class','fa fa-times');
          }else {
              $(this).find('i').attr('class','fa fa-bars');
          }
      });
       $('p.close').on('click',function(){
        ourMenu.removeClass('active');
      });
       $('nav .menu ul li ul.sub-menu').parent().prepend('<i class="fa fa-chevron-left downI"></i>');
       $('nav .menu ul li').append('<i class="fa fa-cog before"></i>');
       $('nav .menu ul li ul.sub-menu').parent().find('i.before').hide();
        $('i.downI').click(function(){
          $(this).parent().find('ul').slideToggle();
           if( $(this).hasClass('fa-chevron-left') ) {
             $(this).removeClass('fa-chevron-left').addClass('fa-chevron-up');
           }else {
           $(this).removeClass('fa-chevron-up').addClass('fa-chevron-left');
           }
        });

        /* trigger grid system */
        $('.grid').masonry({
          // options
          itemSelector: '.grid-item',
          columnWidth: 100,
          horizontalOrder:true
        });
         $('.boxedRecent').masonry({
          itemSelector:'.grid-item',
          columnWidth:100,
          horizontalOrder:true
         });
       
        //$('.grid-item:nth-child(2),.grid-item:nth-child(5),.grid-item:nth-child(8)').addClass('grid-item--height2');

        /* filter */

        $('div.filter span').click(function(){
          $(this).siblings('ul').toggleClass('active');
        });
       
      // comment tabs 

       $('.commentTabs li').on('click',function(){
         $(this).addClass('active').siblings('li').removeClass('active');
          var id = $(this).data('id');
           var sib = $(this).siblings().data('id');
           $(id).show();
           $(sib).hide();

       });
  
        var fontS = 17,
            cont = $('section.single .container div.content');
      function bigger (){
         fontS++;
         cont.css('font-size',fontS);
      }
      function smaller () {
               fontS--;
         cont.css('font-size',fontS);
      }

      $('.bigSizer .bigger').click(function(){
         bigger();
      });
      $('.bigSizer .smaller').click(function(){
         smaller();
      });
        /* loading logo */
         $('nav .logo h1 span').addClass('active');


        /*
          ----------------------
          Shuffle Js
          ----------------------
         */
  
         var fig = $('figure');
          fig.addClass('active');
        $('.ShuffleFilter li').on('click',function(){
             var choice = $(this).data('name');
             $(this).addClass('active').siblings().removeClass('active');
               fig.each(function(){
                if($(this).attr('data-groups') == choice){
                    fig.removeClass('active');
                     var that =$(this);
                     setTimeout(function(){
                      that.addClass('active');
                    },300);
                }
                if(choice == 'all') {
                   fig.removeClass('active');
                    setTimeout(function(){
                  fig.addClass('active');
                    },300);
                }
               });
          
        });

      /* album slider tab */
       $('.album-detail  .tabs .tab-head').click(function(){
          $(this).next('.tab-body').slideToggle(400).siblings('.tab-body').slideUp(400);
            if($(this).find('i').hasClass('fa-plus')){
              $(this).find('i').attr('class','fa fa-minus').parent().siblings().find('i').attr('class','fa fa-plus');
            }else{
          $(this).find('i').attr('class','fa fa-plus').parent().siblings().find('i').attr('class','fa fa-plus');

            }
       });
    

      /*
       ---------------
       --- show album image in single post
       --------------- 
      */

          $('.albumSlider .item img').click(function(){
            $('section.single .back').html('<img src='+$(this).attr('src')+' />');
          });
      /*
       ---------------
       --- show search box when click on search icon 
       --------------- 
      */

       $('nav span.searchIcon').click(function(){
        $('.searchBox').toggleClass('active');
        if($(this).find('i').hasClass('fa-search')){
            $(this).find('i').attr('class','fa fa-close');
        }else {
          $(this).find('i').attr('class','fa fa-search')
        }
       });

       /*
        ---------------------
        ------ show selected item album
        --------------------
       */
          
        var itemSDiv = $('.activeitemSelected div');
       $('.sliderA .owl-item .item').click(function(){
           $('.activeitemSelected').addClass('active');
           itemSDiv.html('<img src='+$(this).find('img').attr('src')+' />');
       });
        $('.activeitemSelected span').click(function(){
        $(this).parent().removeClass('active');
       });

       /*
        ---------------------
        ------ show / hide comment in single post
        --------------------
       */

       $('#commentToggle').on('click',function(){
         $('#disqus_thread').slideToggle(450);
          if($(this).find('i').hasClass('fa-plus')){
            $(this).find('i').attr('class','fa fa-minus');
          }else {
            $(this).find('i').attr('class','fa fa-plus');
          }
       });



});


   

       

 





  
  


  
  
  





