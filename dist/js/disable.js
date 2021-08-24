export default class Disable {
    
    disableBtn(btn, text) {
	    btn.innerHTML = text;
        btn.disabled = true;
    }

    enableBtn(btn, text) {
	    btn.innerHTML = text;
        btn.disabled = false;
    }
}