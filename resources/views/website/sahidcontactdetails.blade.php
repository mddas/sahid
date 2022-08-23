<section class="sahid_contact_detail">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2>Are You Interest To Contact With Us?</h2>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC.</p>
                <div class="add-contact">
                        <span class="call-us wow fadeInUp" data-wow-delay="0.1s"
                              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><i
                                    class="fas fa-map-marker-alt"></i><div class="contact_info_detail">
                                <h4>Our Location</h4>
                                <span><a href="#">{{$global_setting->website_full_address}}</a></span>
                            </div></span>
                    <span class="call-us wow fadeInUp" data-wow-delay="0.3s"
                          style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"><i
                                class="fas fa-phone-volume"></i><div class="contact_info_detail">
                                <h4>Call</h4>
                                <span><a href="#">{{$global_setting->phone}}, {{$global_setting->phone_ne}}</a></span>
                            </div></span>
                    <span class="call-us wow fadeInUp" data-wow-delay="0.5s"
                          style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><i
                                class="fas fa-envelope"></i><div class="contact_info_detail">
                                <h4>Email</h4>
                                <span><a href="#">{{$global_setting->site_email}}</a></span>
                            </div></span>

                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <div class="contact_form">
                    <div role="form" class="wpcf7" id="wpcf7-f59-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <h3 class="section-title text-center">Make An Appointment</h3>
                        <form action="{{route('storeapply')}}" method="POST" class="theme-form-one form-validation" autocomplete="on" enctype='multipart/form-data' class="wpcf7-form" novalidate="novalidate">
                            @csrf
                            <p><label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" name="name" class="wpcf7-form-control wpcf7-text" placeholder="Your Name" required>
                                </span>
                                </label>
                            </p>
                            <p><label>
                                <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="email" class="wpcf7-form-control wpcf7-text"
                                           placeholder="Your Email (required)">
                                </span>
                                </label>
                            </p>
                            <p><label>
                                <span class="wpcf7-form-control-wrap your-subject">
                                    <input type="number" name="number" value=""
                                           class="wpcf7-form-control wpcf7-text" placeholder="Number" required>
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
