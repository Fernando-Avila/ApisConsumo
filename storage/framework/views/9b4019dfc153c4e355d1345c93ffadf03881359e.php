<?php $__env->startSection('content'); ?>
    <div class="container center">
        <div style="display: flex; align-items: center; justify-content: center; height: 100vh">
            <div class="mx-auto" style="width: 50%; height: 40%;">
                <div class="card text-center">
                    <div class="card-body">
                        <ul style="display: inline-block;
                        text-align: left; ">
                        <li>Name <?php echo e($user->id); ?></li>
                        <li>Phone <?php echo e($user->phone); ?></li>
                        <li>Email <?php echo e($user->email); ?></li>
                        <li>Code <?php echo e($user->code); ?></li>
                        <li>Guia <?php echo e($user->guiaId ?? 'null'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\test\resources\views/users/show.blade.php ENDPATH**/ ?>