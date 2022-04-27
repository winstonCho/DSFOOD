
$(document).ready(function(){
    $('.btm_nav1 nav').hover(function(){
        $('.btm_nav1 .sub').stop().slideDown();
        $('.sub_bg').stop().slideDown();
    },function(){
        $('.btm_nav1 .sub').stop().slideUp();
        $('.sub_bg').stop().slideUp();
    });
    $('.btm_nav2 nav').hover(function(){
        $('.btm_nav2 .sub').stop().slideDown();
        $('.sub_bg').stop().slideDown();
    },function(){
        $('.btm_nav2 .sub').stop().slideUp();
        $('.sub_bg').stop().slideUp();
    });
    $('.src_icon').click(function(){
        $('.search_area').stop().slideDown({
            duration: 1000,
            easing: "easeOutBack"
        });
    });
    $('.search_area > a').click(function(){
        $('.search_area').stop().slideUp(1000);
    });
      var swiper = new Swiper(".mySwiper", {
          spaceBetween:200,
          loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
      //section .tab탭메뉴
    //탭메뉴 영역의 버튼에 클릭 이벤ㅌ, 설정
    $('.tab_btn ul li a').click(function(e){
        //a태그의 링크 속성을 막음
        e.preventDefault();
        //클릭한 버튼(a태그)의 부모객체(li)의 인덱스 번호를 읽어서 변수 btnNum에 저장
        var btnNum=$(this).parent('li').index();
        //$(this).find('span').hide();
        //$(this).find('p').show(); 
        //모든 버튼(a태그)의 active제거
        $('.tab_btn ul li a').removeClass('active');
        //클리한 버튼(a태그)에만 active설정
        $(this).addClass('active');
        
        //이미지가 움직이는 기능을 가진 함수 호출
        //인덱스번호(btnNum)을 함수의 매개변수로 넘김
        imgMove(btnNum);
        //설명 영역의 li가 아래에서 위로 이동하는 기능을 가진 함수 호출
        //desMove(btnNum);
    });
    //이미지 움직이는 기능을 가진 함수 선언
    function imgMove(btnNum){
        $('.tab_list').fadeOut();
        $('.tab_list').eq(btnNum).fadeIn(1000);
    }
    $('.t1').show();
    $('.t2').hide();
    $('.coffee').click(function(e){
        e.preventDefault();
        $('.t1').show();
        $('.t2').hide();
        $('.coffee').addClass('active');
        $('.dessert').removeClass('active');
        });
     $('.dessert').click(function(e){
         e.preventDefault();
         $('.t2').show();
         $('.t1').hide();
         $('.coffee').removeClass('active');
        $('.dessert').addClass('active');
        });
        var swiper = new Swiper(".coffeeSwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            loop: true,
            slidesPerView: "auto",
            coverflowEffect: {
              rotate: 50,
              stretch: 0,
              depth: 100,
              modifier: 1,
              slideShadows: false,
            },
            pagination: {
              el: ".swiper-pagination",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
        });
        var swiper = new Swiper(".dessertSwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            loop: true,
            slidesPerView: "auto",
            coverflowEffect: {
              rotate: 50,
              stretch: 0,
              depth: 100,
              modifier: 1,
              slideShadows: false,
            },
            pagination: {
              el: ".swiper-pagination",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
        });
        $('.racipe .racipe_box .racipe_left ul li a').click(function(e){
            e.preventDefault();
            var btnNum=$(this).parent('li').index();
            $('.racipe .racipe_box .racipe_left ul li a').removeClass('active');
            $(this).addClass('active');
            imgMove1(btnNum)
        });
        function imgMove1(btnNum){
            var imgWidth=$('.racipe_img ul li').width();
            var moving=-(btnNum*imgWidth);
            $('.racipe_img ul').animate({
                left: moving
            });
        };
        var swiper = new Swiper(".callSwiper", {
            loop: true,
            pagination: {
              el: ".swiper-pagination",
              type: "progressbar",
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
        });
        $('footer .center_box .footer_left .footer_left_up ul li a').click(function(e){
            e.preventDefault();
            var btnNum=$(this).parent('li').index();
            $('footer .center_box .footer_left .footer_left_up ul li a').removeClass('active');
            $(this).addClass('active');
            imgMove2(btnNum)
        });
        $(window).scroll(function(){
    
            if( $(this).scrollTop() > 100 ){
              $(".top_btn").addClass("on");
            }
            else{
              $(".top_btn").removeClass("on");
            }
            
          });
            
        $(".top_btn").click(function(){
          window.scrollTo({top : 0, behavior: 'smooth'}); 
        });
        $('.fa_con').hide();
        $('.family .fa_title').click(function(e){
            e.preventDefault();
            $('.fa_con').show();
        });
        $('.family .fa_con > a').click(function(e){
            e.preventDefault();
            $('.fa_con').hide();
        });
        $('.br_con').hide();
        $('.brend .br_title').click(function(e){
            e.preventDefault();
            $('.br_con').show();
        });
        $('.brend .br_con > a').click(function(e){
            e.preventDefault();
            $('.br_con').hide();
        });
        $('.co_con').hide();
        $('.community .co_title').click(function(e){
            e.preventDefault();
            $('.co_con').show();
        });
        $('.community .co_con > a').click(function(e){
            e.preventDefault();
            $('.co_con').hide();
        });
        $('.hbg_icon').click(function(e){
            $('.site').animate({
                right:0
            }, 700, function(){
                    navAnil();
            });
        });
        $('.hbg_icon').click(function(){
            $('.site').animate({
                right:0
            }, 700, function(){
               navAnil();
            });
       });
   
       
       $('.site_close').click(function(){
           $('.site').animate({
               right:'-100%'
           }, 700, function(){
               navAnilEnd();
            });
       });
      
   
         function navAnilEnd(){
            $('body').removeClass('active');
           $('.site nav > ul > li').css({
               'opacity':0,
               'magin-top':'50px'
           });
           $('.site .site_nav > ul > li').css({
               'opacity':0,
               'magin-top':'90px'
           });
           $('.site .site_banner ul li').css({
               'opacity':0,
               'magin-top':'50px'
           });
       }
       navAnilEnd();
       function navAnil(){
           $('body').addClass('active');
           $('.site nav > ul > li').each(function(){
               var linum1=$(this).index();
                   $(this).delay(100*linum1).animate({
                       'opacity':1,
                       'magin-top':0
                   });
           });
           $('.site .site_nav > ul > li').each(function(){
               var linum2=$(this).index();
                   $(this).delay(100*linum2).animate({
                       'opacity':1,
                       'magin-top':'40px'
                   });
           });
           $('.site .site_banner ul li').each(function(){
               var linum3=$(this).index();
                   $(this).delay(100*linum3).animate({
                       'opacity':1,
                       'magin-top':0
                   });
           });
       }

       $('.site_menu nav > ul > li').hover(function(){
           if(!($(this).hasClass('active'))){
               $('.site_menu nav > ul > li > a').removeClass('active');
           var siteNum = $(this).index();
           $('.site_bg ul li').hide();
           $('.site_bg ul li').eq(siteNum).fadeIn();
    
       $('.site .site_menu nav > ul > li > p').removeClass('active');
       $(this).find('p').addClass('active');
       $('.site_menu nav .sub').hide();
       $(this).find('.sub').slideDown(1000);
           }
           });
            $('.site_menu nav > ul > li').mouseleave(function(){
                $(this).find('a').removeClass('active');
                $(this).find('p').removeClass('active');
                $(this).find('.sub').hide();
                $('.site_bg ul li').removeClass('active');
                $('.site_bg ul li:first-child').addClass('active');
           });
})

   $(window).scroll(function(){
    if($(window).scrollTop()+$(window).height() >= $('footer').offset().top){
        $('.top_btn').addClass('active');
    }else{
        $('.top_btn').removeClass('active');
    }


});