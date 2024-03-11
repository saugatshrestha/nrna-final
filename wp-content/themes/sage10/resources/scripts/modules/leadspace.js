import Swiper from 'swiper';
import { Pagination, Navigation, Keyboard, Autoplay } from 'swiper/modules';

class LeadspaceSlider {
  constructor() {
    this.initHeaderSlider();
  }

  initHeaderSlider() {
    let leadspaceslider = document.querySelectorAll('.leadspace-slider');
    if (leadspaceslider) {
      leadspaceslider.forEach((leadspace) => {
        let swiperNext = leadspace.querySelector('.swiper-button-next');
        let swiperPagination = leadspace.querySelector('.swiper-pagination');
        if (leadspace) {
          new Swiper(leadspace, {
            slidesPerView: 1,
            modules: [Pagination, Navigation, Keyboard, Autoplay],
            loop: true,
            speed: 1000,
            autoplay: {
              delay: 8000,
            },
            navigation: {
              nextEl: swiperNext,
            },
            pagination: {
              el: swiperPagination,
              clickable: true,
            },
          });
        }
      });
    }
  }
}

export default LeadspaceSlider;
new LeadspaceSlider();
