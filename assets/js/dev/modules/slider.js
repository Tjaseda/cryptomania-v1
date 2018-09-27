class Slider {
  constructor() {
    this.slider = document.getElementById("slider");
    this.sliderWidth;
    this.width;
    this.slideList;
    this.count = 1;
    this.items;
    this.slides;
    this.prev;
    this.next;
    this.setvar();
    this.setSlidesWidth();
    this.moveSlides();
    this.events();

  }

  events() {
    window.addEventListener('resize', this.setSliderWidth.bind(this)); // when window is resized sliderWidth is reset
    window.addEventListener('resize', this.setSlidesWidth.bind(this)); // when window is resized the width of slides is set to be the same as slider width
    this.next.addEventListener('click', this.prevDef.bind(this));
    this.next.addEventListener('click', this.nextSlide.bind(this));
    this.prev.addEventListener('click', this.prevDef.bind(this));
    this.prev.addEventListener('click', this.prevSlide.bind(this));
  }

  setvar() {
    if( this.slider ) {
      this.sliderWidth = this.slider.offsetWidth;
      this.width = this.sliderWidth + 'px';
      this.slideList = document.getElementById("sliderWrap");
      this.items = this.slideList.querySelectorAll("#slide").length;
      this.slides = this.slideList.querySelectorAll("#slide");
      this.prev = document.getElementById("prev");
      this.next = document.getElementById("next");
    }
  }

  prevDef(e) {
    e.preventDefault();
  }

  moveSlides() {
    var that = this;
    setInterval(function() {
      that.nextSlide();
    }, 8000);
  }

  setSliderWidth() {
    this.sliderWidth = this.slider.offsetWidth;
    this.width = this.sliderWidth + 'px';
  }

  setSlidesWidth() {
    this.sliderWidth = this.slider.offsetWidth;
    for (var i=0; i<this.slides.length; i++) {
      this.width = this.sliderWidth + 'px';
      this.slides[i].style.width = this.width;
    }
    this.nextSlide();
    this.prevSlide();
  }

  nextSlide(e) {
    if(this.count < this.items) {
      this.slideList.style.left = "-" + this.count * this.sliderWidth + "px";
      this.count++;
    }
    else if(this.count = this.items) {
      this.slideList.style.left = "0px";
      this.count = 1;
    }
  }

  prevSlide(e) {
    if(this.count > 1) {
      this.count = this.count - 2;
      this.slideList.style.left = "-" + this.count * this.sliderWidth + "px";
      this.count++;
    }
    else if(this.count = 1) {
      this.count = this.items - 1;
      this.slideList.style.left = "-" + this.count * this.sliderWidth + "px";
      this.count++;
    }
  }
}

export default Slider;
