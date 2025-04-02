

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Book List</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>ISBN</th>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Date Published</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($book->id); ?></td>
                    <td><?php echo e($book->isbn); ?></td>
                    <td><?php echo e($book->title); ?></td>
                    <td><?php echo e($book->author); ?></td>
                    <td><?php echo e($book->description); ?></td>
                    <td><?php echo e($book->date_published); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Academics\CIT18\Models and Blade\ModelsAndBladeEngine_Flores\resources\views/books/index.blade.php ENDPATH**/ ?>