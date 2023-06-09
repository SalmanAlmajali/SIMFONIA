<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Registration</title>
	  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	<div class="container mx-auto px-4 py-4 h-full flex justify-center items-center">
		<div class="flex flex-col gap-y-4 w-full md:w-1/2 lg:w-1/3">
			<img src="./asset/img/logo-primary.jpg" alt="Logo SIMFONIA" class="rounded-lg">
			<div class="bg-white rounded-lg p-4 border-2 border-gray-300/50 shadow-lg">
				<form id="registrationForm" action="#" method="POST" class="flex flex-col p-4 gap-y-4">
					<div class="flex flex-col gap-y-2">
						<label for="nim" class="block">
							<span class="block text-sm font-medium text-slate-700">NIM</span>
							<input type="number" id="nim" name="nim" required class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#0059DB] focus:ring-[#0059DB] block w-full rounded-md sm:text-sm focus:ring-1">
						</label>
					</div>

					<div class="flex flex-col gap-y-2">
						<label for="name" class="block">
							<span class="block text-sm font-medium text-slate-700">Name</span>
							<input type="text" id="name" name="name" required class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#0059DB] focus:ring-[#0059DB] block w-full rounded-md sm:text-sm focus:ring-1">
						</label>
					</div>
					
					
					<label for="email" class="block">
						<span class="block text-sm font-medium text-slate-700">Email</span>
						<input type="email" id="email" name="email" required class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#0059DB] focus:ring-[#0059DB] block w-full rounded-md sm:text-sm focus:ring-1">
					</label>
					
					<label for="password" class="block">
						<span class="block text-sm font-medium text-slate-700">Password</span>
					</label>
					<input type="password" id="password" name="password" required class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#0059DB] focus:ring-[#0059DB] block w-full rounded-md sm:text-sm focus:ring-1">
					
					<label for="password_confirmation" class="block">
						<span class="block text-sm font-medium text-slate-700">Password Confirmation</span>
						<input type="password" id="password_confirmation" name="password_confirmation" required class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#0059DB] focus:ring-[#0059DB] block w-full rounded-md sm:text-sm focus:ring-1">
					</label>
					
					<input type="submit" value="Register" class="p-2 bg-[#0059DB] rounded-lg font-medium uppercase text-sm text-white hover:bg-[#0059DB] cursor-pointer">
				</form>
				<a href="./index.html" class="ml-4 font-medium text-sm underline">Log in</a>
			</div>
		</div>
		
	
	</div>
	
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="./js/registerValidation.js"></script>
	<script>
		function registerUser() {
			var form = document.getElementById("registrationForm")

			var nim = document.getElementById('nim')
			var name = document.getElementById('name')
			var email = document.getElementById('email')
			var password = document.getElementById('password')
			var passwordConfirmation = document.getElementById('password_confirmation')

			var formData = new FormData(form)

			if(validate(nim, name, email, password, passwordConfirmation)) {
				var xhr = new XMLHttpRequest()
				xhr.open("POST", "process/registration.php", true);
				xhr.onreadystatechange = function() {
					if (xhr.readyState === 4 && xhr.status === 200) {
						// Handle the server's response
						console.log(xhr.response)
						alert(xhr.responseText)
					}
				};
				xhr.send(formData);
			} else {
				console.log('Gagal');
			}

		}

		var form = document.getElementById("registrationForm");
		form.addEventListener("submit", function(event) {
			event.preventDefault()
			registerUser()
		});
	</script>
</body>
</html>
