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
        slidesToShow: 2,
        slidesToScroll: 2,
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