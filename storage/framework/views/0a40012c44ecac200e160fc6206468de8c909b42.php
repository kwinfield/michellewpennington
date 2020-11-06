<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row medium-padding120 bg-border-color">
		<div class="container">

			<div class="row">

				<div class="col-lg-12">
			<div class="order">
				<h2 class="h1 order-title text-center">Your Order</h2>
				<form action="#" method="post" class="cart-main">
					<table class="shop_table cart">
						<thead class="cart-product-wrap-title-main">
						<tr>
							<th class="product-thumbnail">Product</th>
							<th class="product-quantity">Quantity</th>
							<th class="product-subtotal">Total</th>
						</tr>
						</thead>
						<tbody>

						
                        <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="cart_item">

                                <td class="product-thumbnail">

                                    <div class="cart-product__item">

                                        <div class="cart-product-content">
                                            <h5 class="cart-product-title"><?php echo e($item->name); ?></h5>
                                        </div>
                                    </div>
                                </td>


                                <td class="product-quantity">

                                    <div class="quantity">
                                        x <?php echo e($item->qty); ?>

                                    </div>

                                </td>

                                <td class="product-subtotal">
                                    <h5 class="total amount">$<?php echo e(number_format($item->total())); ?></h5>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                            

						</tbody>
					</table>

					<div class="cheque">

						<div class="logos">
							<a href="#" class="logos-item">
								<img src="<?php echo e(asset('img/visa.png')); ?>" alt="Visa">
							</a>
							<a href="#" class="logos-item">
								<img src="<?php echo e(asset('img/mastercard.png')); ?>" alt="MasterCard">
							</a>
							<a href="#" class="logos-item">
								<img src="<?php echo e(asset('img/discover.png')); ?>" alt="DISCOVER">
							</a>
							<a href="#" class="logos-item">
								<img src="<?php echo e(asset('img/amex.png')); ?>" alt="Amex">
							</a>
							
							<span style="float: right;">
                                <form action="<?php echo e(route('cart.checkout')); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

									  <script
									    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
									    data-key="pk_test_51HkDDJGmOrpmjtnU9molwhkiBRR15vIC16E0cMgM1nf4mFrifSGfYSaGeQNVNMZAqMv22LYcnLjghzbHDOOWKxUT00bZkCVLRm"
									    data-amount="<?php echo e(Cart::total() * 100); ?>"
									    data-name="michellewpennington.com"
									    data-description="Make your purchase."
									    data-image="<?php echo e(asset('img/book.photo.1.png')); ?>"
									    data-locale="auto"
									    data-zip-code="true">
									  </script>
								</form>
							</span>
						</div>
					</div>

				</form>
			</div>
		</div>

			</div>
		</div>
	</div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/keithwinfield/projects/books/resources/views/checkout.blade.php ENDPATH**/ ?>