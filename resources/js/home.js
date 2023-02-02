document.addEventListener( 'DOMContentLoaded', function () {

    var main = new Splide( '#main-carousel', {
        type   : 'loop',
        rewind: true,
      pagination: false,
      arrows    : false,
      autoplay: true,
      speed: 1500,
    } );
  
    var thumbnails = new Splide( '#thumbnail-carousel', {
      fixedWidth  : 270,
      fixedHeight : 150,
      gap         : 10,
      rewind      : true,
      pagination  : false,
      isNavigation: true,
      arrows    : false,
      breakpoints : {
        600: {
          fixedWidth : 60,
          fixedHeight: 44,
        },
      },
    } );
  
    main.sync( thumbnails );
    main.mount();
    thumbnails.mount();

    document.querySelector('#slider__div').style.height = window.innerHeight - 280 + 'px';
    window.addEventListener( 'resize', function () {
      document.querySelector('#slider__div').style.height = window.innerHeight - 280 + 'px';
    });
  } );
  
