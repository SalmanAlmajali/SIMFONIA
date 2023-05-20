function validate(nim, password) {
    if(!nim.checkValidity()) {
        Swal.fire({
            title: 'Error!',
            text: nim.validationMessage,
            icon: 'error',
            confirmButtonText: 'Cool'
        })
    } else if(!password.checkValidity()) {
        Swal.fire({
            title: 'Error!',
            text: password.validationMessage,
            icon: 'error',
            confirmButtonText: 'Cool'
        })
        return false
    } else {
        return true
    }
}