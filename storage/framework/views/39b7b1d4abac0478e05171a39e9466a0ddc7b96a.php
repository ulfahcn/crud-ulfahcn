<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pakaian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="<?php echo e(route('blog.create')); ?>" class="btn btn-md btn-success mb-3">TAMBAH DATA PAKAIAN</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Merk Pakaian</th>
                                <th scope="col">Warna Pakaian</th>
                                <th scope="col">Size Pakaian</th>
                                <th scope="col">Description</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($blog->merk); ?></td>
                                    <td><?php echo e($blog->color); ?></td>
                                    <td><?php echo e($blog->size); ?></td>
                                    <td><?php echo e($blog->description); ?></td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('blog.destroy', $blog->id)); ?>" method="POST">
                                            <a href="<?php echo e(route('blog.edit', $blog->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                  <div class="alert alert-danger">
                                      Data Blog belum Tersedia.
                                  </div>
                              <?php endif; ?>
                            </tbody>
                          </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        <?php if(session()-> has('success')): ?>

            toastr.success('<?php echo e(session('success')); ?>', 'BERHASIL!');

        <?php elseif(session()-> has('error')): ?>

            toastr.error('<?php echo e(session('error')); ?>', 'GAGAL!');

        <?php endif; ?>
    </script>

</body>
</html>
<?php /**PATH /home/ulfahcn/project/tugas-crud/resources/views/blog/index.blade.php ENDPATH**/ ?>