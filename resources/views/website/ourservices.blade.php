<section class="sahid-services">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-title text-center">Our Services</h2>
            </div>
        </div>
        <div class="row">

            @if(isset($services))
                <!-----start service------>
                @foreach($services as $service)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="box">
                            <figure>
                                <img src="{{$service->banner_image}}" alt=""/>
                            </figure>
                            <h3>{{$service->caption}}</h3>
                        </div>
                    </div>
                @endforeach
                <!-----end service--->
            @endif
            <div class="col-lg-12 col-md-12 mt-5 text-center">
                <a class="btn btn_link" href="/services">Know More</a>
            </div>
        </div>
    </div>
</section>
