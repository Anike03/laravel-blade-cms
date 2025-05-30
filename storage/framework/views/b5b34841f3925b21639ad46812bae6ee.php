<?php $__env->startSection('content'); ?>

    <section class="w3-padding">

        <h2>Add Project</h2>

        <form method="post" action="<?php echo e(env('APP_URL')); ?>/console/projects/add" novalidate class="w3-margin-bottom">

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

            <div class="w3-margin-bottom">
                <label for="slug">Slug:</label>
                <input type="text" name="slug" id="slug" value="<?php echo e(old('slug')); ?>" required>

                <?php if($errors->first('slug')): ?>
                    <br>
                    <span class="w3-text-red"><?php echo e($errors->first('slug')); ?></span>
                <?php endif; ?>
            </div>

            <div class="w3-margin-bottom">
                <label for="content">Content:</label>
                <textarea name="content" id="content" required><?php echo e(old('content')); ?></textarea>

                <?php if($errors->first('content')): ?>
                    <br>
                    <span class="w3-text-red"><?php echo e($errors->first('content')); ?></span>
                <?php endif; ?>
            </div>

            <div class="w3-margin-bottom">
                <label for="type_id">Type:</label>
                <select name="type_id" id="type_id">
                    <option></option>
                    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($type->id); ?>" <?php echo e($type->id == old('type_id') ? 'selected' : ''); ?>>
                            <?php echo e($type->title); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->first('type_id')): ?>
                    <br>
                    <span class="w3-text-red"><?php echo e($errors->first('type_id')); ?></span>
                <?php endif; ?>
            </div>

            <button type="submit" class="w3-button w3-green">Add Project</button>

        </form>

        <a href="<?php echo e(env('APP_URL')); ?>/console/projects/list">Back to Project List</a>

    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-blade-cms\resources\views/projects/add.blade.php ENDPATH**/ ?>