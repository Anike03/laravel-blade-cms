<?php $__env->startSection('content'); ?>

    <section class="w3-padding">

        <h2>Add Skill</h2>

        <form method="post" action="<?php echo e(env('APP_URL')); ?>/console/skills/add" novalidate>
            <?php echo csrf_field(); ?>

            <div class="w3-margin-bottom">
                <label for="title">Title:</label>
                <input type="title" name="title" id="title" value="<?php echo e(old('title')); ?>" required>

                <?php if($errors->first('title')): ?>
                    <br>
                    <span class="w3-text-red"><?php echo e($errors->first('title')); ?></span>
                <?php endif; ?>
            </div>

            <div class="w3-margin-bottom">
                <label for="url">URL:</label>
                <input type="url" name="url" id="url" value="<?php echo e(old('url')); ?>">

                <?php if($errors->first('url')): ?>
                    <br>
                    <span class="w3-text-red"><?php echo e($errors->first('url')); ?></span>
                <?php endif; ?>
            </div>

            <button type="submit" class="w3-button w3-green">Add Skill</button>

        </form>

        <a href="/console/skills/list">Back to Skill List</a>

    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-blade-cms\resources\views/skills/add.blade.php ENDPATH**/ ?>