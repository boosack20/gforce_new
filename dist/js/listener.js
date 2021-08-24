export default class Listener {
    
    click(element, callback) {
        element.addEventListener('touchstart', async e => {
            callback(e);
        }, false);
        element.addEventListener('click', async e => {
            callback(e);
        }, false);
    }

    change(element, callback) {
        element.addEventListener('change', async e => {
            callback(e);
        }, false);
    }

    
}