<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataMahasiswa</title>
</head>
<body>


<?php $__env->startSection('content'); ?>
<body>
<h2>Data Mahasiswa</h2>

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $mahasiswa = [
                ['nama' => 'Agus ', 'npm' => '212310004', 'kelas' => 'TI-21-PA'],
                ['nama' => 'Hera', 'npm' => '212310001', 'kelas' => 'TI-21-PA'],
                ['nama' => 'Bagas', 'npm' => '212310002', 'kelas' => 'TI-21-PA'],
                ['nama' => 'Banuwasito', 'npm' => '212310003', 'kelas' => 'TI-21-PA'],
                ['nama' => 'Sephia', 'npm' => '212310009', 'kelas' => 'TI-21-PA'],

                
                ];
        ?>
        <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($mhs['nama']); ?></td>
            <td><?php echo e($mhs['npm']); ?></td>
            <td><?php echo e($mhs['kelas']); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
    </body>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Quiz3\resources\views/DataMahasiswa.blade.php ENDPATH**/ ?>