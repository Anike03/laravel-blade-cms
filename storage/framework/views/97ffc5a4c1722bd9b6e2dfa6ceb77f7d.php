<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2>Manage Skills</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th></th>
            <th>Title</th>
            <th>URL</th>
            <th>Created</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php if($skill->image): ?>
                        <img src="<?php echo e(asset('storage/'.$skill->image)); ?>" width="200">
                    <?php endif; ?>
                </td>
                <td><?php echo e($skill->title); ?></td>
                <td>
                    <a href="<?php echo e($skill->url); ?>">
                        <?php echo e($skill->url); ?>

                    </a>
                </td>
                <td><?php echo e($skill->created_at->format('M j, Y')); ?></td>
            <td><a href="<?php echo e(env('APP_URL')); ?>/console/skills/image/<?php echo e($skill->id); ?>" class="action-view">Image</a></td>
            <td><a href="<?php echo e(env('APP_URL')); ?>/console/skills/edit/<?php echo e($skill->id); ?>" class="action-edit">Edit</a></td>
            <td><a href="<?php echo e(env('APP_URL')); ?>/console/skills/delete/<?php echo e($skill->id); ?>" class="action-delete">Delete</a></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    
    <a href="<?php echo e(env('APP_URL')); ?>/console/skills/add" class="w3-button w3-green">+ New Skill</a>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-blade-cms\resources\views/skills/list.blade.php ENDPATH**/ ?>