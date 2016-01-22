
  var sliderInterval;
  var slideInterval = 4000;
  jQuery(function(){
    
    if ($(".slides .slide").length > 1) {
      // $("#slider").swipeleft(function(){
      //   nextSlide();
      //   console.log("blah");
      //   return false;
      // });
      // $("#slider").swiperight(function(){
      //   prevSlide();
      //   return false;
      // });
      $("a.next").click(function(){
        nextSlide();
        return false;
      });
      
      $("a.prev").click(function(){
        prevSlide();
        return false;
      });
      initSlide();
      
      // $(".hello-img .img-cont > *").hover(function(){
      //   $(".hover-scene").stop().fadeIn();
      //   clearInterval(sliderInterval);
      // },function(){
      //   $(".hover-scene").stop().fadeOut();
      //   initAutoSlide();
      // })
    }
  })
  
  function nextSlide(){
    var c_slide = $(".slide.active");
    if ($(".slide.active").next().next().length == 0)
      $(".slide:first").insertAfter($(".slide:last"));
    setClasses(c_slide.next());
    initAutoSlide();
  }
  
  function prevSlide(){
    var c_slide = $(".slide.active");
    if ($(".slide.active").prev().prev().length == 0)
      $(".slide:last").insertBefore($(".slide:first"));
    setClasses(c_slide.prev());
    initAutoSlide();
  }
  
  function setClasses(active){
    $(".slide").removeClass('active prev next');
    active.prev().removeClass('active').addClass("prev");
    active.next().removeClass('active').addClass("next");
    active.removeClass("prev next").addClass('active');
  }
  
  function initSlide(){
    $(".slides .slide:first").addClass("active");
    var clones = $(".slides .slide").clone();
    clones.removeClass("active").insertBefore($(".slides .slide:first"));
    $(".slides .slide.active").next().addClass("next");
    $(".slides .slide.active").prev().addClass("prev");
    initAutoSlide();
  }
  
  function initAutoSlide(){
    clearInterval(sliderInterval);
    sliderInterval = setInterval(function(){
      nextSlide();
      initAutoSlide();
    },slideInterval);
  }
  

  
