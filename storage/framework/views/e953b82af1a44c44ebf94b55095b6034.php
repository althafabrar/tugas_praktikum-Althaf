<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>

</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('employees.index')); ?>" class="nav-link active">Employee List</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3"><?php echo e($pageTitle); ?></h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="<?php echo e(route('employees.create')); ?>" class="btn btn-primary">Create Employee</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Purnama</td>
                        <td>Anaking</td>
                        <td>purnama.anaking@gmail.com</td>
                        <td>20</td>
                        <td>
                            <div class="d-flex">
                                <a href="<?php echo e(route('employees.show', ['employee' => 1])); ?>" class="btn btn-outline-dark btn-sm me-2"><i 
                                    class="bi-person-lines-fill"></i></a>
                                <a href="<?php echo e(route('employees.edit', ['employee' => 1])); ?>" class="btn btn-outline-dark btn-sm me-2"><i 
                                    class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="<?php echo e(route('employees.destroy', ['employee' => 1])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Adzanil</td>
                        <td>Rachmadhi</td>
                        <td>adzanil.rachmadhi@gmail.com</td>
                        <td>25</td>
                        <td>
                            <div class="d-flex">
                                <a href="<?php echo e(route('employees.show', ['employee' => 2])); ?>" class="btn btn-outline-dark btn-sm me-2"><i 
                                    class="bi-person-lines-fill"></i></a>
                                <a href="<?php echo e(route('employees.edit', ['employee' => 2])); ?>" class="btn btn-outline-dark btn-sm me-2"><i 
                                    class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="<?php echo e(route('employees.destroy', ['employee' => 2])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Berlian</td>
                        <td>Rahmy</td>
                        <td>berlian.rahmy@gmail.com</td>
                        <td>23</td>
                        <td>
                            <div class="d-flex">
                                <a href="<?php echo e(route('employees.show', ['employee' => 3])); ?>" class="btn btn-outline-dark btn-sm me-2"><i 
                                    class="bi-person-lines-fill"></i></a>
                                <a href="<?php echo e(route('employees.edit', ['employee' => 3])); ?>" class="btn btn-outline-dark btn-sm me-2"><i 
                                    class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="<?php echo e(route('employees.destroy', ['employee' => 3])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>

</body>
</html><?php /**PATH C:\Users\Administrator\Praktikum-05\resources\views/employee/index.blade.php ENDPATH**/ ?>