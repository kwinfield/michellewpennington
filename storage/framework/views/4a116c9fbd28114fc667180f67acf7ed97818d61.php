<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row bg-border-color">
            <div class="container">
                <div class="row">

                    <div class="col-12">

                        <div class="cart">

                            <h1 class="cart-title">In Your Shopping Cart: <span class="c-primary"> <?php echo e(Cart::content()->count()); ?> items</span></h1>

                        </div>

                        <form action="#" method="post" class="cart-main col-lg-6">

                            

                                <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <div class="container">
                                    <div class="product-details row justify-content-center">
                                        <div class="col-12">
                                            <h4 class="product-details-info-title mt-5 text-center"><?php echo e($book->name); ?></h4>
                                            <h5 class="text-success mt-3 text-center" name="price">$<?php echo e($book->price); ?></h5>
                                            <div>
                                                <img src="<?php echo e(asset($book->model->image)); ?>" alt="product" class="mx-auto d-block mb-5 img-fluid" style="max-width: 200px">
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div class="product-details-info">
                                                
                             
                                                <div class="row">
                                                    <div class="quantity mx-auto">
                                                        <a href="<?php echo e(route('cart.decr', ['id' => $book->rowId, 'qty' => $book->qty ])); ?>" class="quantity-minus text-danger">-</a>
                                                        <input title="Qty" class="email input-text qty text-secondary" type="text" placeholder="1" readonly value="<?php echo e($book->qty); ?>">
                                                        <a href="<?php echo e(route('cart.incr', ['id' => $book->rowId, 'qty' => $book->qty ])); ?>" class="quantity-plus text-success">+</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                

                                

                                </tbody>
                            </table>


                        </form>

                        <div class="cart-total col-lg-6">
                            <h3 class="cart-total-title">Cart Total</h3>
                            <h5 class="cart-total-total">Total: <span class="text-success">$<?php echo e(Cart::total()); ?></span></h5>
                            <a href="<?php echo e(route('cart.checkout')); ?>">
                                <button class="btn btn-secondary mb-5">Checkout</button>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/keithwinfield/projects/books/resources/views/cart.blade.php ENDPATH**/ ?>