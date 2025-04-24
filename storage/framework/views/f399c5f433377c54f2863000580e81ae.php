<?php $__env->startSection('content'); ?>

    <section class="w3-padding">

        <ul id="dashboard">
            <li><a href="<?php echo e(env('APP_URL')); ?>/console/projects/list">Manage Projects</a></li>
            <li><a href="<?php echo e(env('APP_URL')); ?>/console/types/list">Manage Types</a></li>
            <li><a href="<?php echo e(env('APP_URL')); ?>/console/skills/list">Manage Skills</a></li>

            <li><a href="<?php echo e(env('APP_URL')); ?>/console/users/list">Manage Users</a></li>
            <li><a href="<?php echo e(env('APP_URL')); ?>/console/logout">Log Out</a></li>
        </ul>

    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-blade-cms\resources\views/console/dashboard.blade.php ENDPATH**/ ?>