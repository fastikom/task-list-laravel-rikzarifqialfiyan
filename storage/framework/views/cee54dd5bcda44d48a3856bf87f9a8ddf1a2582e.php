<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well">
                <div class="page-header">
                    <h3>Edit job: <?php echo e($job->title); ?></h3>
                </div>

                <form action="<?php echo e(route('tasks.edit', $job->id)); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <input type="text" name="title" class="form-control form-roll" value="<?php echo e($job->title); ?>" />
                    </div>
                    <div class="form-group">
                        <textarea name="body" cols="30" rows="10" class="form-control"><?php echo e($job->body); ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-default">
                    </div>
                </form>
            </div> <!-- Well -->
<form action="<?php echo e(route('tasks.delete', $job->id)); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <input type="submit" value="Hapus" class="btn btn-danger">

</form>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>