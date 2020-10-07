@extends('layout')

@section('title', "Home Page")

  

@section('about')
    <div class="mt-8">
        <h1 class="h1-responsive font-weight-bold text-center my-4">About</h1>
        <p class="p-5">
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
    </div>
@endsection

@section('book_photo')
    <div>
        <img src="img/book.photo.1.jpeg" alt="Book Photo" class="img-fluid">
    </div>
    
@endsection

@section('contact')
    <div>
        <!--Section: Contact v.2-->
        <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Your name</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Your email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Subject</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Your message</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-secondary text-white" onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>San Francisco, CA 94126, USA</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+ 01 234 567 89</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>contact@mdbootstrap.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

        </section>
        <!--Section: Contact v.2-->
    </div>
@endsection