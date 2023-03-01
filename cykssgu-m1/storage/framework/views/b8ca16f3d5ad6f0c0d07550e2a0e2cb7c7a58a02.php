<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="../resources/views/css/style.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <style> .card{
                display: flex;
                justify-content:space-between;
            }
            </style>
            <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?php echo e($b->img); ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"> <?php echo e($b->name); ?>

                  </h5>
                  <p class="card-text"><?php echo e($b->description); ?></p>
                  <a href="#" class="btn btn-primary"><?php echo e($b->price); ?></a>
                </div>
              </div>


              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/astdvyrn/fgaxnba-m1/resources/views/katalog.blade.php ENDPATH**/ ?>