<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $data['title'] ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= BASE_URL ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= BASE_URL ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">

    <link href="<?= BASE_URL ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>

    
                <?php if (isset($data['pilihanData'])) : ?>
                    <div class="card shadow mb-4 mt-5">
                        <div class="card-header py-2 d-flex align-items-center justify-content-between">
                            <h6 class="m-0 py-2 font-weight-bold text-primary d-inline-block">Result</h6>
                            <?php if (count($data['pilihanData']) != 0) : ?>
                                <a onclick="window.print()"  class="btn btn-success btn-circle btn-sm my-1">
                                    <i class="fas fa-print"></i>
                                </a>
                            <?php endif
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if (count($data['pilihanData']) != 0) : ?>
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Nama Siswa</th>
                                            <?php foreach ($data['bulan'] as $bulan) : ?>
                                                <th><?= $bulan ?></th>
                                            <?php endforeach; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data['pilihanData'] as $key => $d) : ?>
                                            <tr>
                                                <?php $identitas = explode('|', $key) ?>
                                                <td><span class="font-weight-bold"><?= $identitas[0] ?></span><br><?= $identitas[1] ?></td>
                                                <?php foreach ($data['bulan'] as $key => $bulan) : ?>
                                                    <?php if (in_array($key, $d)) : ?>
                                                        <td class="text-center"><i class="fas fa-check-circle text-success"></i></td>
                                                    <?php else : ?>
                                                        <td class="text-center"><i class="fas fa-times-circle text-danger"></i></td>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= BASE_URL ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASE_URL ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= BASE_URL ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= BASE_URL ?>/js/sb-admin-2.min.js"></script>

    <script src="<?= BASE_URL ?>/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= BASE_URL ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= BASE_URL ?>/js/demo/datatables-demo.js"></script>

</body>

</html>