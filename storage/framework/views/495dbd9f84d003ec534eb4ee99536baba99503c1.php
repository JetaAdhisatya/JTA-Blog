<?php $__env->startSection('title', 'About'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="header">
        <h1 class="mywebsite">About</h1>

    </div>

    <div class="image-thanos"></div>

    <div class="konten">
        <h3><?php echo e($name); ?></h3>
        <p><?php echo e($email); ?></p>
        <p><?php echo e($linkedin); ?></p>

    </div>
    <div class="footer">
        <p class="copyright">
            Copyright 2022.JetaAdhisatya
        </p>
    </div>
</div>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\D_Drive\tugassekolah\Binus Sem5\Web Prog\Laravel Project\forum5\resources\views/about.blade.php ENDPATH**/ ?>