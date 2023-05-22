<?php require 'partials/dashboard_head.php'; ?>

<body class="h-full">
    <div class="min-h-full">
    
        <?php require 'partials/dashboard_nav.php'; ?>
        
        <?php require 'partials/dashboard_header.php'; ?>
        
        <main>
            <div class="mx-auto py-6 flex flex-row gap-x-4 sm:px-6 lg:px-8">
            
                <?php require 'partials/dashboard_sidebar.php'; ?>

                <div class="w-full bg-white px-4 py-6 shadow-lg rounded-lg">
                    <h1 id="greeting" class="text-3xl font-bold tracking-tight text-gray-900 bg-[#0059DB] p-2 rounded-lg text-white"></h1>
                </div>
            </div>
        </main>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="./js/getUserActive.js"></script>
    <script src="./js/logout.js"></script>
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
           greeting.innerHTML = `Hallo, ${active[1]}`
        } else {
            location.replace('/')
        }

    </script>
</body>
</html>