<section class="sahid-about ">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="img-background-wrapper">
                    <div class="img_background" style="background-image: url('{{$about->banner_image ?? ''}}')">
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-6  col-sm-12">
                <h2>{{$about->caption ?? ''}}</h2>
                <p>
                   {{$about->short_content ?? ''}}
                </p>
                <a href="#" class="btn btn_link--transparent">Learn More</a>
            </div>
        </div>
    </div>
</section>
