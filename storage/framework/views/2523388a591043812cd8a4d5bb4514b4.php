<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2>Add User</h2>

    <form method="post" action="<?php echo e(env('APP_URL')); ?>/console/users/add" novalidate class="w3-margin-bottom">

        <?php echo csrf_field(); ?>

        <div class="w3-margin-bottom">
            <label for="first">First Name:</label>
            <input type="text" name="first" id="first" value="<?php echo e(old('first')); ?>" required>
            
            <?php if($errors->first('first')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('first')); ?></span>
            <?php endif; ?>
        </div>

        <div class="w3-margin-bottom">
            <label for="last">Last Name:</label>
            <input type="text" name="last" id="last" value="<?php echo e(old('last')); ?>" required>

            <?php if($errors->first('last')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('last')); ?></span>
            <?php endif; ?>
        </div>

        <div class="w3-margin-bottom">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" required>

            <?php if($errors->first('email')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('email')); ?></span>
            <?php endif; ?>
        </div>

        <div class="w3-margin-bottom">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">

            <?php if($errors->first('password')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('password')); ?></span>
            <?php endif; ?>
        </div>

        <button type="submit" class="w3-button w3-green">Add User</button>

    </form>

    <a href="<?php echo e(env('APP_URL')); ?>/console/users/list">Back to User List</a>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-blade-cms\resources\views/users/add.blade.php ENDPATH**/ ?>