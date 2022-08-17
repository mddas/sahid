<section class="latest_news">

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h2 class="section-title text-center">Latest News</h2>
            </div>
        </div>
    </div>
    @if(isset($news))
    <div class="row no-gutters" style="padding: 0px 20px">
        <div class="owl-carousel owl-theme news">
            <!---latest news---->
             @foreach($news as $new)
                <div class="item">
                    <div class="outer-box">
                        <a href="/read-more/{{$new->nav_name}}">
                            <div class="box" style="background-image: url({{$new->banner_image}})">
                                <div class="box-overlay">
                                    <h3>{{$new->caption}}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
             @endforeach
            <!----latest news end---->
        </div>
        <div class="col-lg-12 col-md-12 mt-5 text-center">
            <a class="btn btn_link" href="newsevent">Know More</a>
        </div>
    </div>
    @endif
</section>