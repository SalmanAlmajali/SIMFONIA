localStorage.setItem('counter', 3)

function failCounter(isTrue) {
    var counter = parseInt(localStorage.getItem('counter'))

    if(isTrue) {
        localStorage.setItem('counter', counter - 1)
    }

}