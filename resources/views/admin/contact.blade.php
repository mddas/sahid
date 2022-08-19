
			


@extends('layouts.master')
    @section("content")
    
	<section class="page-title page-title-layout5 bg-img" style="background-image: url(/website/images/6.jpg) !important; background-size: cover; background-position: center center; padding-top: 120px;">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-between flex-wrap align-items-center">
            <h1 class="pagetitle__heading my-3">Contact Us</h1>
            <nav>
              <ol class="breadcrumb my-3">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Contact</li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

<section class="sahid_contact_detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2>Are You Interest To Contact With Us?</h2>
                <p>Contact</p>
                <div class="add-contact">
                        <span class="call-us wow fadeInUp" data-wow-delay="0.1s"
                              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><i
                                    class="fas fa-map-marker-alt"></i><div class="contact_info_detail">
                                <h4>Our Location</h4>
                                <span><a href="#">Kalanki–14, Kathmandu, Nepal</a></span>
                            </div></span>
                    <span class="call-us wow fadeInUp" data-wow-delay="0.3s"
                          style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"><i
                                class="fas fa-phone-volume"></i><div class="contact_info_detail">
                                <h4>Our Contact</h4>
                                <span><a href="#">977-01-5218921, 5219934, 5219935</a></span>
                            </div></span>
                    <span class="call-us wow fadeInUp" data-wow-delay="0.5s"
                          style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><i
                                class="fas fa-envelope"></i><div class="contact_info_detail">
                                <h4>Email</h4>
                                <span><a href="#">info@sahidhospitalkalanki.com</a></span>
                            </div></span>

                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <div class="contact_form">
                    <div role="form" class="wpcf7" id="wpcf7-f59-o1" lang="en-US" dir="ltr" >
                        <div class="screen-reader-response"></div>
                        <h3 class="section-title text-center">Make An Appointment</h3>
                        <form action="{{route('storeapply')}}" method="POST" class="theme-form-one form-validation" autocomplete="on" enctype='multipart/form-data' class="wpcf7-form" novalidate="novalidate">
							@csrf
                            <p><label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input name="name" type="text" class="wpcf7-form-control wpcf7-text" placeholder="Your Name">
                                </span>
                                </label>
                            </p>
							<p><label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input name="number" type="number" class="wpcf7-form-control wpcf7-text" placeholder="Your Number" required>
                                </span>
                                </label>
                            </p>
                            <p><label>
                                <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="your-email" class="wpcf7-form-control wpcf7-text"
                                           placeholder="Your Email (required)">
                                </span>
                                </label>
                            </p>
                            <p><label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea name="message" class="wpcf7-form-control wpcf7-textarea"
                                              placeholder="Message"></textarea>
                                </span>
                                </label></p>
                            <p><input type="submit" value="Apponment" class="wpcf7-form-control wpcf7-submit"><span
                                        class="ajax-loader"></span></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="location-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.7364064278913!2d85.27883531548191!3d27.694540732660613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb187ae8a53389%3A0x67b10f9eb22bde90!2z4KS44KS54KS_4KSmIOCkruClh-CkruCli-CksOCkv-Ckr-CksiDgpIXgpLjgpY3gpKrgpKTgpL7gpLI!5e0!3m2!1sne!2snp!4v1657448656275!5m2!1sne!2snp" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection

	