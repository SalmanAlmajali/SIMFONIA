<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="../js/getUserActive.js"></script>
<script src="../js/logout.js"></script>
<script>
    var active = JSON.parse(localStorage.getItem('active'))

    var logout = document.getElementById('logout')

    logout.addEventListener('click', function(e) {
        e.preventDefault()
        Swal.fire({
            icon: 'question',
            title: 'Yakin mau logout??',
            showCancelButton: true,
        }).then((result) => {
            if (result.isConfirmed) {
                logOut()
            }
        })
    })

    if(active) {
        getUserActive(active[1])
    } else {
        location.replace('/')
    }

</script>