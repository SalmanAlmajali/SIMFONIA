<div class="w-[20rem] hidden bg-white px-4 py-6 shadow-lg rounded-lg flex-col gap-y-4 md:flex">
    <a href="/dashboard" class="<?= urlIs('/dashboard') ? "bg-[#0059DB]" : "bg-slate-500" ?> text-white p-2 rounded-lg text-sm font-medium">Dashboard</a>
    <a href="/data-nilai" class="<?= urlIs('/data-nilai') ? "bg-[#0059DB]" : "bg-slate-500" ?> p-2 rounded-lg text-white text-sm font-medium">Data Nilai</a>
    <?php
        if($_SESSION['role'] == 'admin'):
            if(urlIs('/mata-kuliah')) {
                echo '<a href="/mata-kuliah" class="bg-[#0059DB] p-2 rounded-lg text-white text-sm font-medium">Mata Kuliah</a>';
            } else {
                echo '<a href="/mata-kuliah" class="bg-slate-500 p-2 rounded-lg text-white text-sm font-medium">Mata Kuliah</a>';
            }
        

        endif
    ?>
</div>