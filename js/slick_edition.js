$('.responsive').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  autoplay: true,
  arrows: false,
  autoplaySpeed: 4000,
  responsive: [
    {
      breakpoint: 1024,
      arrows: false,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      dots: false,
      breakpoint: 600,
      arrows: false,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      dots: false,
      breakpoint: 480,
      arrows: false,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});





$('.responsive_portfolio').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 11114000,
  dots: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: false,
        speed: 1150,
      }
    },
    {
      breakpoint: 600,
      settings: {
        dots: false,
        slidesToShow: 1,
        arrows: false,
        speed: 150,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
        dots: false,
        settings: {
        slidesToShow: 1,
        arrows: false,
         speed: 150,
        slidesToScroll: 1
      }
    }
  ]
});

