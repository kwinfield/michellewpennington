<?php $__env->startSection('title', "Michelle W. Pennington"); ?>



<?php $__env->startSection('content'); ?>
    <div class="mt-8">
        <h1 class="h1-responsive font-weight-bold text-center my-4">Welcome</h1>
        <p class="p-5 lg-p-5">
        EVOLVE...From Heart Breaks to Hearts Healed is the journey of eight women who have overcome incredible odds in their marriages. Some have struggled to conceive children; others survived domestic violence, and a few have battled infidelity. Then there are those who married addicts, overcame social injustice, or served our country but failed to serve their marriage. These stories are raw and uncut yet authentic and genuine. Get ready to go on a rollercoaster journey that will take you through every emotion with these uniquely evolving women who went through hell but lived to tell their stories. Evolve shines a light to all WOMEN to say that it is ok to take the "S" off your chest and snuggle up in a corner and be a WOMAN. This book is for anyone who has cried in the bathroom mirror, put her makeup on anyway, and showed up like nothing was wrong. Somewhere in these stories, you will find your own. They are your advocate, your backbone, your megaphone, and your cheerleader. Why? Because they are you, and you are them.
        </p>
    </div>
    <div class="row justify-content-center">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-8 text-center">
                <img src="<?php echo e($book->image); ?>" alt="Book Photo" class="img-fluid">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <div class="p-5 lg-p-5 mt-3 text-center">
            <p>
                Michelle (Chelle) Pennington is a native of Cleveland, Ohio who now resides in the Queen City,
                Charlotte, NC. After moving with her husband and five children she vowed to make the most of her new
                environment and try all sorts of new endeavors, one of them being changing her career path. A life-long
                sales executive and marketer extraordinaire, Chelle decided to take a leap of faith and become an
                entrepreneur – creating and managing her successful photo booth company, The Photo Booth Lady.
                Having accomplished the unthinkable, it was time for the next challenge, becoming a best-selling author.
                This is Chelle’s debut contribution to the literary world. It is a heartfelt and brutally honest depiction of a
                challenging time in her life including the many ebbs and flows she experienced. Evolve: From Heart
                Break to Hearts Healed is Chelle’s perfect introduction to all readers – ENJOY!
            </p>
            <a href="book/<?php echo e($book->id); ?>"><button class="btn btn-success mb-3">Buy Now</button></a>
            <hr>
        </div>
        <div class="mt-5 row justify-center">
            <div class="col-10">
                <div class="row justify-content-center">
                    <!--Section: Contact v.2-->
                    <section class="mb-4">
                    
                    <!--Section heading-->
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                    <p class="text-center w-responsive mx-auto mb-5 col-10">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                        a matter of hours to help you.</p>
                    
                    <div class="col-10 mb-5 mx-auto">
                        <form id="contact-form" method="post" action="php/process.php" role="form" class="form">
            
                            <div class="messages"></div>
            
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname..." required="required" data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname..." required="required" data-error="Lastname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_email" type="tel" name="phone" class="form-control" placeholder="Please enter your phone number...">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email..." required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Type message here..." rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <input type="submit" class="btn btn-secondary btn-send mb-5" value="Send message">
                                    </div>
                                </div>
                            </div>
            
                        </form>
                        <div class="status"></div>
                        <div class="row justify-content-between mx-auto col-10 p-5 m-0">
                            <div class="col-md-3 pt-3 text-center mb-3">
                                <a href="https://www.marykay.com/mwattspennington" target="_blank">
                                    <img src="img/mklogo.png" alt="" style="width: 150px">
                                </a>
                            </div>
                            <div class="col-md-3 text-center">
                                <a href="https://www.thephotoboothlady.com" target="_blank">
                                    <img src="img/pbllogo.png" alt="" style="width: 150px">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    </section>
                    <!--Section: Contact v.2-->
                </div>
            </div>  
        </div>
    </div>
    <hr>
    
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/keithwinfield/projects/books/resources/views/home.blade.php ENDPATH**/ ?>