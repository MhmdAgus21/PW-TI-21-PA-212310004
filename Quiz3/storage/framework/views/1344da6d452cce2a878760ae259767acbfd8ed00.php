<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="path/to/bootstrap.css">
    <link rel="stylesheet" href="resources/css/style.css">
    
</head>
<body>
    
    

    <?php $__env->startSection('content'); ?>
    <section class="sc1">
        <div class="h1">
            <h1>Ini adalah Home agus</h1>
        </div>
    </section>
        <h3>Muhamad Agus - 212310004</h3>
    <?php $__env->stopSection(); ?>

<style>
    .sc1{
        background-color: ##f9004d;
    }
    .h1{
        color: ##f9004d;
    }
</style>

</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Quiz3\resources\views/home.blade.php ENDPATH**/ ?>