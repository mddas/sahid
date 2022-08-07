<section class="sahid_testimonial"
         style="background: url(/website/images/testimonial-bg.png) no-repeat bottom;background-size:cover;background-position: top">
    <div class="thin_layer" style="background: #0d233e;opacity:0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="owl-carousel owl-theme testimonial_slider">
                    @if(isset($testimonial))
                    <!----start----->
                      @foreach($testimonial as $test)
                        <div class="item">
                            <div class="testimonial_inner">
                                <p>{{$test->short_content}}</p>
                                <div class="testimonial_author">
                                    <div class="author_image">
                                        <img src="{{$test->banner_image}}" alt="author image">
                                    </div>
                                    <h5>{{$test->nav_name}}</h5>
                                    <p>{{$test->caption}}</p>
                                </div>
                                <i class="fas fa-quote-left"></i>
                            </div>
                        </div>
                       @endforeach
                    <!---end------->
                    @endif
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <h3 class="section-title">Our Testimonials </h3>
                <p>Having a look on what our patient are saying</p>
            </div>
        </div>
    </div>
</section>