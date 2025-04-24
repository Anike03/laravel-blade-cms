<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2>Skill Image</h2>

    <div class="w3-margin-bottom">
        <?php if($skill->image): ?>
            <img src="<?php echo e(asset('storage/'.$skill->image)); ?>" width="200">
        <?php endif; ?>
    </div>

    <form method="post" action="/console/skills/image/<?php echo e($skill->id); ?>" novalidate class="w3-margin-bottom" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        <div class="w3-margin-bottom">
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" value="<?php echo e(old('image')); ?>" required>
            
            <?php if($errors->first('image')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('image')); ?></span>
            <?php endif; ?>
        </div>

        <button type="submit" class="w3-button w3-green">Add Image</button>

    </form>

    <a href="/console/skills/list">Back to Skill List</a>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nilavan/Desktop/laravel-cms/laravel-blade-cms/resources/views/skills/image.blade.php ENDPATH**/ ?>