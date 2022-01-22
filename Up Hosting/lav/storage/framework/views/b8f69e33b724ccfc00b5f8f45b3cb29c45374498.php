<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Latihan Laravel</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">Laravel</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle Navigation">
                        <span class="navbar-toggle-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            
                            <a class="nav-link active" href="<?php echo e(route('index')); ?>">Beranda <span class="sr-only">(current)</span></a>
                            <a class="nav-link" href="<?php echo e(route('student.index')); ?>">Mahasiswa</a>
                            <a class="nav-link" href="<?php echo e(route('student.data')); ?>">DataTable</a>
                            <a class="nav-link" href="<?php echo e(route('about')); ?>">About</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    
                    <div class="card-body"><?php echo $__env->yieldContent('content'); ?></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://cdn.jsdeliver.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\prak_web\practice_laravel\resources\views/template/base.blade.php ENDPATH**/ ?>