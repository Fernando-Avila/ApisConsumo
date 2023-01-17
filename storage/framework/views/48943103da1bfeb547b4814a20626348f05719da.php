<?php $__env->startSection('content'); ?>
    <div class="container">
        <div style="display: flex; align-items: center; justify-content: center; height: 100vh">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <form action="<?php echo e(route('clientapi.search')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="search">Search ID</label>
                                <div class="col-2">
                                    <input type="text" name="search" id="search" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>

                </div>
                <div class="table-responsive">
                    <table
                        class="table table-striped
                table-hover
                table-borderless
                table-primary
                align-middle">

                        <thead class="table-light">

                            <tr>
                                <th>ID</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Code</th>
                                <th>Roll</th>
                                <th>Guia</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php if(isset($users)): ?>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="table-primary">
                                        <td><?php echo e($user->id); ?></td>
                                        <td><?php echo e($user->phone); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td><?php echo e($user->code); ?></td>
                                        <td><?php echo e($user->rol->nombre); ?></td>
                                        <td><?php echo e($user->guiaId ?? 'null'); ?></td>
                                        <td><a href="<?php echo e(route('clientapi.show', ['clientapi' => $user->id])); ?>"
                                                type="btn btn-success"> Show </a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php elseif(isset($user)): ?>
                                <tr class="table-primary">
                                    <td><?php echo e($user->id); ?></td>
                                    <td><?php echo e($user->phone); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->code); ?></td>
                                    <td><?php echo e($user->rolId); ?></td>
                                    <td><?php echo e($user->guiaId ?? 'null'); ?></td>
                                    <td><a href="<?php echo e(route('clientapi.show', ['clientapi' => $user->id])); ?>"
                                            type="btn btn-success"> Show </a></td>
                                </tr>
                            <?php else: ?>
                                <tr class="table-primary">
                                    <td colspan="7">No hay usuarios</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\test\resources\views/users/index.blade.php ENDPATH**/ ?>