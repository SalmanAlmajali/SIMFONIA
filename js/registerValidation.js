function validate(nim, name, email, password, passwordConfirmation) {
    if(!nim.checkValidity()) {
        Swal.fire({
            title: 'Error!',
            text: nim.validationMessage,
            icon: 'error',
            confirmButtonText: 'Ok'
        })
    } else if(!name.checkValidity()) {
        Swal.fire({
            title: 'Error!',
            text: name.validationMessage,
            icon: 'error',
            confirmButtonText: 'Ok'
        })
    } else if(!email.checkValidity()) {
        Swal.fire({
            title: 'Error!',
            text: email.validationMessage,
            icon: 'error',
            confirmButtonText: 'Ok'
        })
    } else if(!password.checkValidity()) {
        Swal.fire({
            title: 'Error!',
            text: password.validationMessage,
            icon: 'error',
            confirmButtonText: 'Ok'
        })
    } else if(!passwordConfirmation.checkValidity()) {
        Swal.fire({
            title: 'Error!',
            text: passwordConfirmation.validationMessage,
            icon: 'error',
            confirmButtonText: 'Ok'
        })
    } else if(password.value !== passwordConfirmation.value) {
        Swal.fire({
            title: 'Error!',
            text: 'Password is not match',
            icon: 'error',
            confirmButtonText: 'Ok'
        })
        return false
    } else {
        return true
    }
}