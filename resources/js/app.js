require('./bootstrap');
import Swal from "sweetalert2";

window.showToast = function (message) {
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: message,
        showConfirmButton: false,
        timer: 1000
    })
}
