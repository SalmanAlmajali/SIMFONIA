function validate(nim, password) {
    console.log(nim.value)
    if(nim.value.length < 9) {
        Swal.fire({
            title: 'Error!',
            text: "NIM anda kurang panjang",
            icon: 'error',
            confirmButtonText: 'Cool'
        })
        return false
    } if(!nim.checkValidity()) {
        Swal.fire({
            title: 'Error!',
            text: nim.validationMessage,
            icon: 'error',
            confirmButtonText: 'Cool'
        })
        return false
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