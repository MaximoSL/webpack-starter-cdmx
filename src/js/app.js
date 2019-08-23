import '../scss/app.scss';

window.$ = window.jQuery = require('jquery');
import Popper from 'popper.js';
import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/collapse';

let mqTablet = window.matchMedia('(min-width: 576px) and (max-width: 991.98px)'),
    mqDesktop = window.matchMedia('(min-width: 992px)'),
    mqMobile = window.matchMedia('(max-width: 575.98px)');


require('./viewport');

export { mqTablet, mqDesktop, mqMobile }
