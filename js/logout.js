function logOut() {
    var active = localStorage.getItem('active')
    if(active) {
        localStorage.removeItem('active')
        location.replace('/')
    } else {
        location.replace('/')
    }
}