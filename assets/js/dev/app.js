import Slider from './modules/slider';
import Popup from './modules/share-popup';
import MobileMenu from './modules/mobile-menu';
import DropLang from './modules/drop-lang'



var popup = new Popup();
var mobileMenu = new MobileMenu();
var dropLang = new DropLang();

if ( document.getElementById('slider') ) {
  var slider = new Slider();
}
