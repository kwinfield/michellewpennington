<?php $__env->startSection('title'); ?>
<?php echo e($book->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="my-5">Books</h1>
        <div class="card-body row justify-content-center">
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card col-md-8">
                <img src="<?php echo e($book->image); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($book->name); ?></h5>
                    <p class="card-text"><?php echo e($book->description); ?></p>
                    <a href="#" class="btn btn-success">Add to cart</a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/keithwinfield/projects/books/resources/views/books/index.blade.php ENDPATH**/ ?>