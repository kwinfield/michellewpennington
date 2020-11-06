<?php $__env->startSection('title'); ?>
    Evolve - From Heart Breaks to Hearts Healed
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
                <div class="product-details row">
                    <div class="col-6 text-center">
                        <div>
                            <img src="<?php echo e($book->image); ?>" alt="product">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="/cart/add" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <div class="product-details-info">
                                <div class="product-details-info-price text-success" name="price">$<?php echo e($book->price); ?></div>
                                <h3 class="product-details-info-title"><?php echo e($book->name); ?></h3>
                                <p class="product-details-info-text" name="description"><?php echo e($book->description); ?>

                                </p>
                                

                                <div class="row justify-content-center">
                                        <div class="quantity col-12">
                                            <a href="#" class="quantity-minus bg-danger">-</a>
                                            <input title="Qty" type="text" value="2" name="qty">
                                            <a href="#" class="quantity-plus bg-success">+</a>
                                        </div>
                                        <div class="col-12 mt-5">
                                            <button href="19_cart.html" class="btn btn-secondary">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('./layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/keithwinfield/projects/books/resources/views/books/show.blade.php ENDPATH**/ ?>