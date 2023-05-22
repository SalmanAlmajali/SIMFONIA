<?php require 'partials/dashboard_head.php'; ?>

<body class="h-full">
    <div class="min-h-full">

        <?php require 'partials/dashboard_nav.php'; ?>
        
        <?php require 'partials/dashboard_header.php'; ?>
    
        <main>
            <div class="mx-auto py-6 flex flex-row gap-x-4 sm:px-6 lg:px-8">

                <?php require 'partials/dashboard_sidebar.php'; ?>
                
                <div class="w-full bg-white px-4 py-6 shadow-lg rounded-lg">
                   <table class="table-auto border-collapse border-2 w-full rounded-lg">
                        <thead>
                            <tr>
                                <th class="border-2">#</th>
                                <th class="border-2">
                                    Thn. Akademik
                                </th>
                                <th class="border-2">
                                    Periode
                                </th>
                                <th class="border-2">
                                    Jumlah SKS
                                </th>
                                <th class="border-2">
                                    IPS
                                </th>
                                <th class="border-2">
                                    % hadir
                                </th>
                                <th class="border-2">
                                    Cetak KHS
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="border-2"></th>
                                <th class="border-2"></th>
                                <th class="border-2"></th>
                                <th class="border-2">Total :</th>
                                <th class="border-2">Average : </th>
                                <th class="border-2">Average : </th>
                            </tr>
                        </tfoot>
                   </table>
                </div>
            </div>
        </main>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>