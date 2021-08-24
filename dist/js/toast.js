import './pages/izi/iziToast.min.js';

export default class Toast {
    
    success(message) {
        iziToast.success({
            message: message,
            progressBar: true,
            timeout: 5000,
            close: false,
            position: 'topRight'
        });
    }

    error(message) {
        iziToast.error({
            message: message,
            progressBar: true,
            timeout: 5000,
            close: false,
            position: 'topRight'
        });
    }

    warning(message) {
        iziToast.warning({
            message: message,
            progressBar: true,
            timeout: 5000,
            close: false,
            position: 'topRight'
        });
    }

    info(message) {
        iziToast.info({
            message: message,
            progressBar: true,
            timeout: 5000,
            close: false,
            position: 'topRight'
        });
    }

    clickable(message, location) {
        iziToast.show({
            theme: 'light',
            icon: 'icon-person',
            message: message,
            position: 'center',
            progressBarColor: 'rgb(0, 255, 184)',
            buttons: [
                ['<button>Ok</button>', function (instance, toast) {
                    window.location.replace(location);
                }, true], // true to focus
            ],
            onOpening: function(instance, toast){
                console.info('callback abriu!');
            },
            onClosing: function(instance, toast, closedBy){
                console.info('closedBy: ' + closedBy); // tells if it was closed by 'drag' or 'button'
                if(closedBy == 'timeout') {
                    console.log('closed');
                    window.location.replace(location);
                }
            }
        });
    }
}