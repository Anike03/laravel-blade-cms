<?php $__env->startSection('content'); ?>
<div class="add-container form-container">
  <div class="add-card">
    <h2 class="form-title">Skill Image</h2>

    <?php if($skill->image): ?>
      <div class="image-preview">
        <img
          src="<?php echo e(asset('storage/'.$skill->image)); ?>"
          alt="Current Skill Image"
          class="preview-img"
        >
      </div>
    <?php endif; ?>

    <form
      method="post"
      action="<?php echo e(env('APP_URL')); ?>/console/skills/image/<?php echo e($skill->id); ?>"
      enctype="multipart/form-data"
      novalidate
    >
      <?php echo csrf_field(); ?>

      <div class="form-group">
        <label for="image">Select New Image</label>
        <input type="file" id="image" name="image" required>
        <?php if($errors->first('image')): ?>
          <div class="form-error"><?php echo e($errors->first('image')); ?></div>
        <?php endif; ?>
      </div>

      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Upload Image</button>
        <a href="<?php echo e(env('APP_URL')); ?>/console/skills/list" class="btn btn-secondary">Back to Skill List</a>
      </div>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-blade-cms\resources\views/skills/image.blade.php ENDPATH**/ ?>