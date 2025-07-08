document.addEventListener( 'DOMContentLoaded', function () {
  new Splide( '.splide', {
    arrows :'false' ,
    type    : 'loop',
    perPage : 1,
    autoplay: true,
    cover: false,
    speed: number = 200,
  }).mount();
});