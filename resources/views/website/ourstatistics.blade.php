<section class="counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12  col-sm-12">

                <h2 class="section-title text-center">Our Statistics</h2>

            </div>
        </div>
        <div class="row">
            @if(isset($statistics))
                <!---start Statistics------>
                @foreach($statistics as $statistic)
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="box" style="background:#043760 ">
                                <figure>
                                    <img src="{{$statistic->banner_image}}" alt="" />
                                </figure>
                                <div class="numWrapper"><span class="countNum">{{$statistic->short_content}}</span>+</div>
                                <h3>{{$statistic->caption}}</h3>
                            </div>
                        </div>
                    @endforeach
                <!-----stop Statistics----->
            @endif
        </div>
    </div>
</section>
