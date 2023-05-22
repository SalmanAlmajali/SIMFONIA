<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto px-4 py-4 h-screen flex justify-center items-center flex-col gap-y-4">
        <img src="./asset/img/logo-primary.jpg" alt="Logo SIMFONIA" class="rounded-lg w-[30rem]">
        <h1 class="ml-4 font-bold italic text-lg uppercase">Terlalu banyak percobaan untuk login!</h1>
        <p class="ml-4 font-medium text-sm">Coba lagi dalam <span id="counter"></span></p>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        var counter = parseInt(localStorage.getItem('counter'))

        if(counter != 0) {
            location.replace('/')
        } else {
            var timeLeft = 30;
            var elem = document.getElementById('counter');
            
            var timerId = setInterval(countdown, 1000);
            
            function countdown() {
                if (timeLeft == -1) {
                    clearTimeout(timerId);
                    location.replace('/')
                } else {
                    elem.innerHTML = timeLeft + ' detik';
                    timeLeft--;
    
                    console.log(window.location.pathname);
                }
            }
        }

    </script>        
</body>
</html>