<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="header">
        <h1 class="mywebsite">My Website</h1>
    </div>

    <div class="image-hero"></div>

    <div class="konten">
        <h2>Judul Artikel</h2>
            <p class="penulis">
                Ditulis Oleh <a href="#">Jeta</a> Pada 10 Maret 2021
            </p>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h2><?php echo e($post["judul"]); ?></h2>
                <p><?php echo e($post["body"]); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="footer">
        <p class="copyright">
            Copyright 2022.JetaAdhisatya
        </p>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\D_Drive\tugassekolah\Binus Sem5\Web Prog\Laravel Project\forum5\resources\views/index.blade.php ENDPATH**/ ?>