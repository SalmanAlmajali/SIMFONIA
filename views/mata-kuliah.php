<?php require 'partials/dashboard_head.php'; ?>

<body class="h-full">
    <div class="min-h-full">
    
        <?php require 'partials/dashboard_nav.php'; ?>
        
        <?php require 'partials/dashboard_header.php'; ?>
        
        <main>
            <div class="mx-auto py-6 flex flex-row gap-x-4 sm:px-6 lg:px-8">
            
                <?php require 'partials/dashboard_sidebar.php'; ?>

                <div class="w-full bg-white px-4 py-6 shadow-lg rounded-lg">
                    <button id="trigger" class="p-2 bg-[#0059DB] rounded-lg font-medium text-sm text-white hover:bg-[#0059DB] cursor-pointer">Tambah Data</button>
                    <table class="table-auto border-collapse border-2 w-full rounded-lg mt-4">
                        <thead>
                            <tr>
                                <th class="border-2 py-4">Kode Mata Kuliah</th>
                                <th class="border-2 py-4">Nama Mata Kuliah</th>
                                <th class="border-2 py-4"></th>
                            </tr>
                            <tbody>
                                <?php foreach($matkuls as $matkul) : ?>
                                    <tr>
                                        <td class="border-2">
                                            <p class="ml-4 text-sm font-medium"><?= $matkul['kodeMK'] ?></p>
                                        </td>
                                        <td class="border-2">
                                            <p class="ml-4 text-sm font-medium"><?= $matkul['namaMK'] ?></p>
                                        </td>
                                        <td class="border-2 px-1 text-center gap-y-2 flex flex-col">
                                            <a href="#" id="triggerEdit" data-id="<?= $matkul['kodeMK'] ?>" class="p-2 text-[#0059DB] rounded-lg font-medium text-md hover:bg-[#0059DB] hover:text-white cursor-pointer transition-all w-full block">Edit</a>
                                            <a href="#" id="triggerDelete" data-id="<?= $matkul['kodeMK'] ?>" class="p-2 text-[#d80000] rounded-lg font-medium text-md hover:bg-[#d80000] hover:text-white cursor-pointer transition-all w-full block">Delete</a>
                                        </td>
                                        <td class="border-2 text-center">
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <div id="modal" class="hidden absolute top-0 w-full h-screen bg-black/50 backdrop-blur-md p-4 z-10 flex flex-col justify-center items-center">
        <div class="w-full bg-white p-4 rounded-lg md:w-1/3">
            <form id="formTambah" action="#" method="POST" class="flex flex-col gap-y-4">
                
                <div class="flex flex-col gap-y-2">
                    <label for="kodeMK" class="block">
                        <span class="block text-sm font-medium text-slate-700">Kode Mata Kuliah</span>
                        <input type="text" id="kodeMK" name="kodeMK" required class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#0059DB] focus:ring-[#0059DB] block w-full rounded-md sm:text-sm focus:ring-1">
                    </label>
                </div>

                <div class="flex flex-col gap-y-2">
                    <label for="namaMK" class="block">
                        <span class="block text-sm font-medium text-slate-700">Nama Mata Kuliah</span>
                        <input type="text" id="namaMK" name="namaMK" required class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#0059DB] focus:ring-[#0059DB] block w-full rounded-md sm:text-sm focus:ring-1">
                    </label>
                </div>

                <div class="flex justify-end gap-x-2">
                    <button id="cancel" type="button" class="bg-slate-500 p-2 rounded-lg text-sm font-medium text-white w-[8rem]">Cancel</button>
                    <button id="save" class="bg-[#0059DB] p-2 rounded-lg text-sm font-medium text-white w-[8rem] hover:bg-[#0059DB]">Save</button>
                </div>
            </form>
        </div>
    </div>
    
    <div id="modalEdit" class="hidden absolute top-0 w-full h-screen bg-black/50 backdrop-blur-md p-4 z-10 flex flex-col justify-center items-center">
        <div class="w-full bg-white p-4 rounded-lg md:w-1/3">
            <form id="formEdit" action="#" method="POST" class="flex flex-col gap-y-4">
                
                <div class="flex flex-col gap-y-2">
                    <label for="kodeMKEditHidden" class="block">
                        <input type="hidden" id="kodeMKEditHidden" name="kodeMKEditHidden" required class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#0059DB] focus:ring-[#0059DB] block w-full rounded-md sm:text-sm focus:ring-1">
                    </label>
                </div>

                <div class="flex flex-col gap-y-2">
                    <label for="kodeMKEdit" class="block">
                        <span class="block text-sm font-medium text-slate-700">Kode Mata Kuliah</span>
                        <input type="text" id="kodeMKEdit" name="kodeMKEdit" required class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#0059DB] focus:ring-[#0059DB] block w-full rounded-md sm:text-sm focus:ring-1">
                    </label>
                </div>

                <div class="flex flex-col gap-y-2">
                    <label for="namaMKEdit" class="block">
                        <span class="block text-sm font-medium text-slate-700">Nama Mata Kuliah</span>
                        <input type="text" id="namaMKEdit" name="namaMKEdit" required class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#0059DB] focus:ring-[#0059DB] block w-full rounded-md sm:text-sm focus:ring-1">
                    </label>
                </div>

                <div class="flex justify-end gap-x-2">
                    <button id="cancelEdit" type="button" class="bg-slate-500 p-2 rounded-lg text-sm font-medium text-white w-[8rem]">Cancel</button>
                    <button id="saveEdit" class="bg-[#0059DB] p-2 rounded-lg text-sm font-medium text-white w-[8rem] hover:bg-[#0059DB]">Save</button>
                </div>
            </form>
        </div>
    </div>

    <?php require 'partials/dashboard_footer.php'; ?>
    <script>
        $('body').on('click', '#trigger', function(e) {
            e.preventDefault()

            $('#modal').removeClass('hidden')
            document.body.classList.add('overflow-hidden')
        })

        $('body').on('click', '#cancel', function(e) {
            e.preventDefault()

            $('#modal').addClass('hidden')
        })
        
        $('body').on('click', '#cancelEdit', function(e) {
            e.preventDefault()

            $('#modalEdit').addClass('hidden')
        })

        var matkuls = [] // Array untuk menyimpan data mata kuliah

        // Fungsi untuk membaca file JSON
        function readMatkuls() {
            $.getJSON('./data/matkuls.json', function(data) {
                matkuls = data // Simpan data dari file JSON ke dalam array matkuls
            })
        }

        $(document).ready(function() {
            readMatkuls() // Pemanggilan fungsi untuk membaca file JSON saat halaman telah dimuat

            $('#formTambah').submit(function(e) {
                e.preventDefault()

                // Mengambil data dari form
                var formData = {
                    kodeMK : $('#kodeMK').val(),
                    namaMK : $('#namaMK').val()
                }

                // Validasi apabila kodeMK sudah terdaftar
                var kodeMKExists = false,
                    namaMKExists = false

                for(let i = 0; i < matkuls.length; i++) {
                    if(matkuls[i].kodeMK === formData.kodeMK) {
                        kodeMKExists = true
                        break
                    }

                    if(matkuls[i].namaMK === formData.namaMK) {
                        namaMKExists = true
                        break
                    }
                }

                if(kodeMKExists || namaMKExists) {
                    Swal.fire({
                        title: 'Error!',
                        text: "Kode of Nama already exists",
                        icon: 'error',
                        confirmButtonText: 'Cool'
                    })
                    return
                }

                // Tambah data matkuls ke dalam Array
                matkuls.push(formData)

                // Request ajax untuk menyimpan data kedalam file
                $.ajax({
                    url: "process/tambah_matkul_process.php",
                    type: "POST",
                    dataType: 'json',
                    data: formData,
                    success: function(res) {
                        // console.log(res);

                        if(res.success) {
                            Swal.fire({
                                title: 'Success!',
                                text: "Data added successfully!",
                                icon: 'success',
                                confirmButtonText: 'Cool'
                            }).then((res) => {
                                if(res.isConfirmed) {
                                    $('#modal').addClass('hidden')
                                    location.reload()
                                }
                            })
                            $('#formTambah')[0].reset() // Mengosongkan inputan pada form
                        }
                    },
                    error: function(error) {
                        console.log(error);
                        Swal.fire({
                            title: 'Success!',
                            text: "Failed to save data! " + error,
                            icon: 'success',
                            confirmButtonText: 'Cool'
                        })
                    }
                })
            })

            $('body').on('click', '#triggerEdit', function(e) {
                e.preventDefault()

                var kodeMK = $(this).attr('data-id')

                $.ajax({
                    url: "process/edit_matkul_process.php",
                    type: "GET",
                    data: {
                        'kodeMK': kodeMK
                    },
                    success: function(res) {
                        var resParse = JSON.parse(res)

                        $('#kodeMKEditHidden').val(resParse.data.kodeMK)
                        $('#kodeMKEdit').val(resParse.data.kodeMK)
                        $('#namaMKEdit').val(resParse.data.namaMK)
                        $('#modalEdit').removeClass('hidden')
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            })

            $('#formEdit').submit(function(e) {
                e.preventDefault()

                var formData = {
                        id: $('#kodeMKEditHidden').val(),
                        kodeMK : $('#kodeMKEdit').val(),
                        namaMK : $('#namaMKEdit').val()
                    }

                $.ajax({
                    url: "process/update_matkul_process.php",
                    type: "POST",
                    data: formData,
                    success: function(res) {
                        // console.log(res);
                        var resParse = JSON.parse(res)

                        if(resParse.success) {
                            Swal.fire({
                                title: 'Success!',
                                text: "Data updated successfully!",
                                icon: 'success',
                                confirmButtonText: 'Cool'
                            }).then((res) => {
                                if(res.isConfirmed) {
                                    $('#modalEdit').addClass('hidden')
                                    location.reload()
                                }
                            })
                            $('#formEdit')[0].reset() // Mengosongkan inputan pada form
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            })

            $('body').on('click', '#triggerDelete', function(e) {
                e.preventDefault()

                var kodeMK = $(this).attr('data-id')

                Swal.fire({
                    icon: 'question',
                    text: 'Apakah anda yakin akan menghapus data ini?',
                    confirmButtonText: 'Cool',
                }).then((res) => {
                    if(res.isConfirmed) {
                        $.ajax({
                            url: "process/delete_matkul_process.php",
                            type: "GET",
                            data: {
                                'kodeMK': kodeMK
                            },
                            success: function(res) {
                                var resParse = JSON.parse(res)

                                console.log(resParse);

                                if(resParse.success) {
                                    Swal.fire({
                                        title: 'Success!',
                                        text: "Data deleted successfully!",
                                        icon: 'success',
                                        confirmButtonText: 'Cool'
                                    }).then((res) => {
                                        if(res.isConfirmed) {
                                            location.reload()
                                        }
                                    })
                                }
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    }
                })
            })
        })
    </script>
</body>
</html>