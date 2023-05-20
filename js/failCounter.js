localStorage.setItem('counter', 0)

function failCounter(isTrue) {
    var counter = parseInt(localStorage.getItem('counter'))

    if(isTrue) {
        localStorage.setItem('counter', counter + 1)
    }
    
    if(counter >= 3) {
        console.log("lebih dari tiga");
        location.replace('./error.html')
    }
}