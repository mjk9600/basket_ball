@extends('layout')
@section('title', 'The CBL | News')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>TheCBL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <!--<script   src={{url('js/bootstrap.bundle.js')}}></script>-->
        <link rel="stylesheet" href={{url('css/layout.css')}}>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.2/swiper-bundle.min.js"></script>
    </head>
    <body >
      <div class="container">
        <div class="wrapper">
            <div class="background">
              <!-- <img src="./image/img1.jpg" alt=""> -->
            </div>
            <div class="item-bg"></div>
          
            <div class="news-slider">
              <div class="news-slider__wrp swiper-wrapper">
                <div class="news-slider__item swiper-slide">
                  <a href="#" class="news__item">
                    <div class="news-date">
                      <span class="news-date__title">24</span>
                      <span class="news-date__txt">May</span>
                    </div>
                    <div class="news__title">
                      Lorem Ipsum Dolor Sit Amed
                    </div>
          
                    <p class="news__txt">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                    </p>
          
                    <div class="news__img">
                      <img src="images/img6.webp" alt="news">
                    </div>
                  </a>
                </div>
          
                <div class="news-slider__item swiper-slide">
                  <a href="#" class="news__item">
                    <div class="news-date">
                      <span class="news-date__title">25</span>
                      <span class="news-date__txt">May</span>
                    </div>
                    <div class="news__title">
                      Lorem Ipsum Dolor Sit Amed
                    </div>
          
                    <p class="news__txt">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                    </p>
          
                    <div class="news__img">
                      <img src="images/img5.webp" alt="news">
                    </div>
                  </a>
                </div>
          
                <div class="news-slider__item swiper-slide">
                  <a href="#" class="news__item">
                    <div class="news-date">
                      <span class="news-date__title">26</span>
                      <span class="news-date__txt">May</span>
                    </div>
                    <div class="news__title">
                      Lorem Ipsum Dolor Sit Amed
                    </div>
          
                    <p class="news__txt">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                    </p>
          
                    <div class="news__img">
                      <img src="images/img4.webp"alt="news">
                    </div>
                  </a>
                </div>
          
                <div class="news-slider__item swiper-slide">
                  <a href="#" class="news__item">
                    <div class="news-date">
                      <span class="news-date__title">27</span>
                      <span class="news-date__txt">May</span>
                    </div>
                    <div class="news__title">
                      Lorem Ipsum Dolor Sit Amed
                    </div>
          
                    <p class="news__txt">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                    </p>
          
                    <div class="news__img">
                      <img src="images/img3.webp" alt="news">
                    </div>
                  </a>
                </div>
          
                <div class="news-slider__item swiper-slide">
                  <a href="#" class="news__item">
                    <div class="news-date">
                      <span class="news-date__title">28</span>
                      <span class="news-date__txt">May</span>
                    </div>
                    <div class="news__title">
                      Lorem Ipsum Dolor Sit Amed
                    </div>
          
                    <p class="news__txt">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                    </p>
          
                    <div class="news__img">
                      <img src="images/img2.webp" alt="news">
                    </div>
                  </a>
                </div>
          
                <div class="news-slider__item swiper-slide">
                  <a href="#" class="news__item">
                    <div class="news-date">
                      <span class="news-date__title">29</span>
                      <span class="news-date__txt">May</span>
                    </div>
                    <div class="news__title">
                      Lorem Ipsum Dolor Sit Amed
                    </div>
          
                    <p class="news__txt">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                    </p>
          
                    <div class="news__img">
                      <img src="images/img6.webp" alt="news">
                    </div>
                  </a>
                </div>
              </div>
          
              <div class="news-slider__ctr">
          
                <div class="news-slider__arrows">
                  <button class="news-slider__arrow news-slider-prev">
                    <span class="icon-font">
                      <svg class="icon icon-arrow-left"><use xlink:href="#icon-arrow-left"></use></svg>
                    </span>
                  </button>
                  <button class="news-slider__arrow news-slider-next">
                    <span class="icon-font">
                      <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>
                    </span>
                  </button>
                </div>
          
                <div class="news-slider__pagination"></div>
          
              </div>
          
            </div>
          
          </div>
          
          <svg hidden="hidden">
            <defs>
              <symbol id="icon-arrow-left" viewBox="0 0 32 32">
                <title>arrow-left</title>
                <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
              </symbol>
              <symbol id="icon-arrow-right" viewBox="0 0 32 32">
                <title>arrow-right</title>
                <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
              </symbol>
            </defs>
          </svg>
          </div>
    </body>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Quicksand:400,500,700&subset=latin-ext");
html {
  position: relative;
  overflow-x: hidden !important;
}

body {
  font-family: "Quicksand", sans-serif;
}

a,
a:hover {
  text-decoration: none;
}

.icon {
  display: inline-block;
  width: 1em;
  height: 1em;
  stroke-width: 0;
  stroke: currentColor;
  fill: currentColor;
}

.background {
  position: fixed;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
}
.background:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #000000;
  opacity: 0.9;
}
.background img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  pointer-events: none;
  user-select: none;
}

.item-bg {
  width: 300px;
  height: 500px;
  position: absolute;
  top: 30px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 6px 26px 6px rgba(0, 0, 0, 0.25);
  opacity: 0;
  transition: all 0.3s;
  left: -30px;
}
.item-bg.active {
  left: 0;
  top: 0;
  opacity: 1;
}

.news-slider {
  z-index: 2;
  max-width: 1300px;
  margin-left: auto;
  margin-right: auto;
  margin-top: 60px;
}
@media screen and (max-width: 1300px) {
  .news-slider {
    max-width: 1000px;
  }
}
@media screen and (max-width: 576px) {
  .news-slider {
    margin-top: 45px;
  }
}
.news-slider__wrp {
  display: flex;
  align-items: flex-start;
  position: relative;
  z-index: 2;
}
.news-slider__item {
  width: 400px;
  flex-shrink: 0;
}
@media screen and (max-width: 992px) {
  .news-slider__item {
    width: 340px;
  }
}
.news-slider__item.swiper-slide {
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s;
}
.news-slider__item.swiper-slide-active, .news-slider__item.swiper-slide-prev, .news-slider__item.swiper-slide-next {
  opacity: 1;
  pointer-events: auto;
}
.news-slider__ctr {
  position: relative;
  z-index: 12;
}
.news-slider__arrow {
  background: #fff;
  border: none;
  display: inline-flex;
  width: 50px;
  height: 50px;
  justify-content: center;
  align-items: center;
  box-shadow: 0 6px 26px 6px rgba(0, 0, 0, 0.25);
  border-radius: 50%;
  position: absolute;
  top: 50%;
  z-index: 12;
  cursor: pointer;
  outline: none !important;
}
.news-slider__arrow:focus {
  outline: none !important;
}
.news-slider__arrow .icon-font {
  display: inline-flex;
}
.news-slider__arrow.news-slider-prev {
  left: 15px;
  transform: translateY(-50%);
}
.news-slider__arrow.news-slider-next {
  right: 15px;
  transform: translateY(-50%);
}
.news-slider__pagination {
  text-align: center;
  margin-top: 50px;
}
.news-slider__pagination .swiper-pagination-bullet {
  width: 13px;
  height: 10px;
  display: inline-block;
  background: #fff;
  opacity: 0.2;
  margin: 0 5px;
  border-radius: 20px;
  transition: opacity 0.5s, background-color 0.5s, width 0.5s;
  transition-delay: 0.5s, 0.5s, 0s;
}
.news-slider__pagination .swiper-pagination-bullet-active {
  opacity: 1;
  background: #ffffff;
  width: 100px;
  transition-delay: 0s;
}
@media screen and (max-width: 576px) {
  .news-slider__pagination .swiper-pagination-bullet-active {
    width: 70px;
  }
}
.news__item {
  padding: 40px;
  color: #fff;
  border-radius: 10px;
  display: block;
  transition: all 0.3s;
}
@media screen and (min-width: 800px) {
  .news__item:hover {
    color: #222222;
    transition-delay: 0.1s;
  }
  .news__item:hover .news-date,
.news__item:hover .news__title,
.news__item:hover .news__txt {
    opacity: 1;
    transition-delay: 0.1s;
  }
  .news__item:hover .news__img {
    box-shadow: none;
  }
}
.news__item.active {
  color: #222222;
}
.news__item.active .news-date,
.news__item.active .news__title,
.news__item.active .news__txt {
  opacity: 1;
}
.news__item.active .news__img {
  box-shadow: none;
}
@media screen and (max-width: 992px) {
  .news__item {
    padding: 30px;
  }
}
@media screen and (max-width: 576px) {
  .news__item {
    padding: 20px;
  }
}
.news-date {
  padding-bottom: 20px;
  margin-bottom: 20px;
  border-bottom: 2px solid;
  display: inline-block;
  opacity: 0.7;
  transition: opacity 0.3s;
}
@media screen and (max-width: 576px) {
  .news-date {
    margin-bottom: 10px;
    display: inline-flex;
    align-items: center;
    padding-bottom: 0;
  }
}
.news-date__title {
  display: block;
  font-size: 32px;
  margin-bottom: 10px;
  font-weight: 500;
}
@media screen and (max-width: 576px) {
  .news-date__title {
    margin-right: 10px;
  }
}
.news-date__txt {
  font-size: 16px;
}
.news__title {
  font-size: 25px;
  font-weight: 500;
  opacity: 0.7;
  margin-top: 10px;
  margin-bottom: 15px;
  transition: opacity 0.3s;
}
@media screen and (max-width: 576px) {
  .news__title {
    font-size: 22px;
    margin-bottom: 10px;
  }
}
.news__txt {
  margin: 10px 0;
  line-height: 1.6em;
  font-size: 15px;
  opacity: 0.7;
  transition: opacity 0.3s;
}
.news__img {
  border-radius: 10px;
  box-shadow: 0 6px 26px 6px rgba(0, 0, 0, 0.25);
  height: 200px;
  margin-top: 30px;
  width: 100%;
  transition: all 0.3s;
  transform-origin: 0% 0%;
}
@media screen and (max-width: 576px) {
  .news__img {
    height: 180px;
    margin-top: 20px;
  }
}
.news__img img {
  max-width: 100%;
  border-radius: 10px;
  height: 100%;
  width: 100%;
}
</style>   
<script>
    var bg = document.querySelector(".item-bg");
    var items = document.querySelectorAll(".news__item");
    var item = document.querySelector(".news__item");
    
    function cLog(content) {
      console.log(content);
    }
    
    if ($(window).width() > 800) {
      $(document).on("mouseover", ".news__item", function (_event, _element) {
        var newsItem = document.querySelectorAll(".news__item");
        newsItem.forEach(function (element, index) {
          element.addEventListener("mouseover", function () {
            var x = this.getBoundingClientRect().left;
            var y = this.getBoundingClientRect().top;
            var width = this.getBoundingClientRect().width;
            var height = this.getBoundingClientRect().height;
    
            $(".item-bg").addClass("active");
            $(".news__item").removeClass("active");
            // $('.news__item').removeClass('active');
    
            bg.style.width = width + "px";
            bg.style.height = height + "px";
            bg.style.transform = "translateX(" + x + "px ) translateY(" + y + "px)";
          });
    
          element.addEventListener("mouseleave", function () {
            $(".item-bg").removeClass("active");
            $(".news__item").removeClass("active");
          });
        });
      });
    }
    
    var swiper = new Swiper(".news-slider", {
      effect: "coverflow",
      grabCursor: true,
      loop: true,
      centeredSlides: true,
      keyboard: true,
      spaceBetween: 0,
      slidesPerView: "auto",
      speed: 300,
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 0,
        modifier: 3,
        slideShadows: false
      },
      breakpoints: {
        480: {
          spaceBetween: 0,
          centeredSlides: true
        }
      },
      simulateTouch: true,
      navigation: {
        nextEl: ".news-slider-next",
        prevEl: ".news-slider-prev"
      },
      pagination: {
        el: ".news-slider__pagination",
        clickable: true
      },
      on: {
        init: function () {
          var activeItem = document.querySelector(".swiper-slide-active");
    
          var sliderItem = activeItem.querySelector(".news__item");
    
          $(".swiper-slide-active .news__item").addClass("active");
    
          var x = sliderItem.getBoundingClientRect().left;
          var y = sliderItem.getBoundingClientRect().top;
          var width = sliderItem.getBoundingClientRect().width;
          var height = sliderItem.getBoundingClientRect().height;
    
          $(".item-bg").addClass("active");
    
          bg.style.width = width + "px";
          bg.style.height = height + "px";
          bg.style.transform = "translateX(" + x + "px ) translateY(" + y + "px)";
        }
      }
    });
    
    swiper.on("touchEnd", function () {
      $(".news__item").removeClass("active");
      $(".swiper-slide-active .news__item").addClass("active");
    });
    
    swiper.on("slideChange", function () {
      $(".news__item").removeClass("active");
    });
    
    swiper.on("slideChangeTransitionEnd", function () {
      $(".news__item").removeClass("active");
      var activeItem = document.querySelector(".swiper-slide-active");
    
      var sliderItem = activeItem.querySelector(".news__item");
    
      $(".swiper-slide-active .news__item").addClass("active");
    
      var x = sliderItem.getBoundingClientRect().left;
      var y = sliderItem.getBoundingClientRect().top;
      var width = sliderItem.getBoundingClientRect().width;
      var height = sliderItem.getBoundingClientRect().height;
    
      $(".item-bg").addClass("active");
    
      bg.style.width = width + "px";
      bg.style.height = height + "px";
      bg.style.transform = "translateX(" + x + "px ) translateY(" + y + "px)";
    });
    </script> 
</html>
@endsection