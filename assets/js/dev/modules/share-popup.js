class Popup {
  constructor() {
    this.shareButton = document.querySelectorAll('#share');
    this.events();
  }

  events() {
    for (var i=0; i<this.shareButton.length; i++) {
      this.shareButton[i].addEventListener('click', this.log.bind(this));
    }
  }

  log(e) {
    e.preventDefault();

    var element = e.target;
    var parent = element.parentNode;
    var link = parent.getAttribute("href");
    var w = 600;
    var h = 400;

    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : window.screenX;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : window.screenY;

    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((height / 2) - (h / 2)) + dualScreenTop;

    window.open(link, 'Share with Friends', 'scrollbars=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
  }
}

export default Popup;
