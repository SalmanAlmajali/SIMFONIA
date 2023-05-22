<?php require 'partials/login_head.php'; ?>

<body>
    <div class="container mx-auto px-4 py-4 h-screen flex justify-center items-center">
        <div class="flex flex-col gap-y-4 w-full md:w-1/2 lg:w-1/3">
            <img src="./asset/img/logo-primary.jpg" alt="Logo SIMFONIA" class="rounded-lg">
            <div class="bg-white rounded-lg p-4 border-2 border-gray-300 shadow-lg">
                <form id="logInForm" action="#" method="POST" class="flex flex-col p-4 gap-y-4">
                    <div class="flex flex-col gap-y-2">
                        <label for="nim" class="block">
                            <span class="block text-sm font-medium text-slate-700">NIM</span>
                            <input type="number" id="nim" name="nim" required class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#0059DB] focus:ring-[#0059DB] block w-full rounded-md sm:text-sm focus:ring-1">
                        </label>
                    </div>
                    
                    <div class="flex flex-col gap-y-2">
                        <label for="password" class="block">
                            <span class="block text-sm font-medium text-slate-700">Password</span>
                            <input type="password" id="password" name="password" required class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#0059DB] focus:ring-[#0059DB] block w-full rounded-md sm:text-sm focus:ring-1">
                        </label>
                    </div>
                    
                    <input type="submit" value="Log In" class="p-2 bg-[#0059DB] rounded-lg font-medium uppercase text-sm text-white hover:bg-[#0059DB] cursor-pointer">
                </form>            
            </div>
            <p class="ml-4 font-medium text-sm">Kesempatan login anda : <span id="counter"></span></p>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="./js/failCounter.js"></script>
    <script src="./js/loginValidation.js"></script>
    <script>
        var active = localStorage.getItem('active')
        if(active) {
            location.replace('/dashboard')
        }

        document.getElementById('counter').innerHTML = parseInt(localStorage.getItem('counter'))

        function loginUser() {
            var form = document.getElementById("logInForm")

            var nim = document.getElementById('nim')
            var password = document.getElementById('password')

            var formData = new FormData()

            if(validate(nim, password)) {
                var xhr = new XMLHttpRequest();
				xhr.open("POST", "process/index.php", true);
				xhr.onreadystatechange = function() {
					if (xhr.readyState === 4 && xhr.status === 200) {
                        var users = JSON.parse(xhr.response)
                        // console.log(users);

                        var user = users.find((item) => item[0] == nim.value && item[3] == password.value)
                        if(user) {
                            localStorage.setItem('active', user)
                            location.replace('/dashboard')
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: 'User does not exist!',
                                icon: 'error',
                                confirmButtonText: 'Ok'
                            }).then((result) => {
                                if (parseInt(localStorage.getItem('counter')) == 0) {
                                    location.replace('/error')
                                }
                            })
                            
                            failCounter(true)
                            document.getElementById('counter').innerHTML = parseInt(localStorage.getItem('counter'))
                        }
					}
				};
				xhr.send(formData)
            } else {
                console.log('Gagal')
            }
        }

        var form = document.getElementById("logInForm")
        form.addEventListener("submit", function(event) {
            event.preventDefault()
                loginUser()
        })
    </script>
</body>
</html>