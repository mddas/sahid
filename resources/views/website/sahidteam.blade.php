
<section class="sahid-team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12  col-sm-12">

                <h2 class="section-title text-center">Our Specilists</h2>

            </div>
        </div>
        <div class="row">
            <!-----start specilists------>
              @foreach($doctors as $specilist)
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="box">
                        <figure>
                            <a href=""><img src="{{$specilist->banner_image}}" alt="" width="800" height="800"></a>
                        </figure>
                        <h4><a href="#">{{$specilist->caption}}</a></h4>
                        <span>{{$specilist->short_content}}</span>
                    </div>
                </div>
             @endforeach
            <!-----stop specilists------->

        </div>
    </div>
</section>