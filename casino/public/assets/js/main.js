'user strict';

// Preloader
$(window).on('load', function () {
    $('.preloader').fadeOut(1000);
});


//Menu Dropdown
$("ul>li>.sub-menu").parent("li").addClass("has-sub-menu");

$('.menu li a').on('click', function () {
  var element = $(this).parent('li');
  if (element.hasClass('open')) {
    element.removeClass('open');
    element.find('li').removeClass('open');
    element.find('ul').slideUp(300, "swing");
  } else {
    element.addClass('open');
    element.children('ul').slideDown(300, "swing");
    element.siblings('li').children('ul').slideUp(300, "swing");
    element.siblings('li').removeClass('open');
    element.siblings('li').find('li').removeClass('open');
    element.siblings('li').find('ul').slideUp(300, "swing");
  }
});

// Responsive Menu
var headerTrigger = $('.header-trigger');
headerTrigger.on('click', function(){
    $('.menu').toggleClass('active')
    $('.overlay').toggleClass('active')
});

var headerTrigger2 = $('.top-bar-trigger');
headerTrigger2.on('click', function(){
    $('.header-top').toggleClass('active')
    $('.overlay').addClass('active')
    $('.overlay').removeClass('active')
});

// Overlay Event
var over = $('.overlay');
over.on('click', function() {
  $('.overlay').removeClass('overlay-color')
  $('.overlay').removeClass('active')
  $('.menu, .header-trigger').removeClass('active')
  $('.header-top').removeClass('active')
})


// Sticky Menu
window.addEventListener('scroll', function(){
  var header = document.querySelector('.header');
  header.classList.toggle('sticky', window.scrollY > 0);
});


// Scroll To Top 
var scrollTop = $(".scrollToTop");
$(window).on('scroll', function () {
  if ($(this).scrollTop() < 500) {
    scrollTop.removeClass("active");
  } else {
    scrollTop.addClass("active");
  }
});

//Click event to scroll to top
$('.scrollToTop').on('click', function () {
  $('html, body').animate({
    scrollTop: 0
  }, 300);
  return false;
});

$('.feature__slider').slick({
  fade: false,
  slidesToShow: 4,
  slidesToScroll: 1,
  infinite: true,
  autoplay: true,
  pauseOnHover: true,
  centerMode: false,
  dots: false,
  arrows: true,
  nextArrow: '<i class="las la-arrow-right arrow-right"></i>',
  prevArrow: '<i class="las la-arrow-left arrow-left"></i> ',
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
      }
    },

  ]
});

$('.testimonial-slider').slick({
  fade: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  infinite: true,
  autoplay: true,
  pauseOnHover: true,
  centerMode: false,
  dots: true,
  arrows: false,
  nextArrow: '<i class="las la-arrow-right arrow-right"></i>',
  prevArrow: '<i class="las la-arrow-left arrow-left"></i> ',
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
      }
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
      }
    },

  ]
});

$('.top-investor-slider').slick({
  fade: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  infinite: true,
  autoplay: true,
  pauseOnHover: true,
  centerMode: false,
  dots: false,
  arrows: false,
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 4,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 2,
      }
    },

  ]
});

// Odometer Counter
$(".counter__item, .dashboard__card__item").each(function () {
  $(this).isInViewport(function (status) {
    if (status === "entered") {
      for (var i = 0; i < document.querySelectorAll(".odometer").length; i++) {
        var el = document.querySelectorAll('.odometer')[i];
        el.innerHTML = el.getAttribute("data-odometer-final");
      }
    }
  });
});

//Faq
$('.faq-item__title').on('click', function (e) {
  var element = $(this).parent('.faq-item');
  if (element.hasClass('open')) {
    element.removeClass('open');
    element.find('.faq-item__content').removeClass('open');
    element.find('.faq-item__content').slideUp(300, "swing");
  } else {
    element.addClass('open');
    element.children('.faq-item__content').slideDown(300, "swing");
    element.siblings('.faq-item').children('.faq-item__content').slideUp(300, "swing");
    element.siblings('.faq-item').removeClass('open');
    element.siblings('.faq-item').find('.faq-item__content').slideUp(300, "swing");
  }
});


$('.user-thumb').on('click', function() {
  $('.dashboard__sidebar').addClass('active')
  $('.overlay').addClass('active')
})

$('.single-select').on('click', function() {
  $('.single-select').removeClass('active')
  $(this).addClass('active')
})

$('.btn-close, .overlay').on('click', function() {
  $('.overlay').removeClass('active')
  $('.menu').removeClass('active')
})

$('.how-item').on('mouseover', function() {
  $('.how-item').removeClass('active')
  $(this).addClass('active')
})

// Dashboard Collapse Expand
$('.user-toggler').on('click', function () {
  $('.dashboard-sidebar').toggleClass('active')
  $('.overlay').toggleClass('overlay-color')
});
$('.close-dashboard, .overlay').on('click', function () {
  $('.dashboard-sidebar').removeClass('active')
  $('.overlay').removeClass('overlay-color')
});
//roulette Wheel
// Roulette Wheel
const numbers = [
  0, 26, 3, 35, 12, 28, 7, 29, 18, 22, 9, 31, 14, 20, 1, 33, 16, 24, 5, 10, 23, 8, 30, 11, 36, 13, 27, 6, 34, 17, 25, 2, 21, 4, 19, 15, 32
];

document.getElementById('spin-button').addEventListener('click', function() {
  let totalRotation, wheel, index, segmentAngle, chosenAngle;
  const chosenNumber = parseInt(document.getElementById('chosen-number').value);
  if (isNaN(chosenNumber) || chosenNumber < 0 || chosenNumber > 36) {
    alert('Please enter a valid number between 0 and 36.');
    return;
  }

  wheel = document.getElementById('wheel');
  index = numbers.indexOf(chosenNumber);
  segmentAngle = 360 / numbers.length;
  chosenAngle = index * segmentAngle;

  totalRotation = (360 * 4) + chosenAngle;

  wheel.style.transition = 'transform 4s ease-out';
  wheel.style.transform = `rotate(${totalRotation}deg)`;
  
  setTimeout(() => {
    alert("winning number was:"+chosenNumber);
      wheel.style.transition = '';
      wheel.style.transform = '';
      totalRotation = 0;
      document.getElementById('chosen-number').value = ''
  },5000)
});



