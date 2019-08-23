import { mqMobile } from './app';

viewport();

function viewport() {
    if (mqMobile.matches) {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    }
}

window.addEventListener('resize', () => {
    viewport();
});
