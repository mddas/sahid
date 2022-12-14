@extends("layouts.master")
@section("content")
<section class="page-title page-title-layout5 bg-img" style="background-image: url(/website/images/6.jpg) !important; background-size: cover; background-position: center center; padding-top: 120px;">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-between flex-wrap align-items-center">
            <h1 class="pagetitle__heading my-3">{{$slug_detail->nav_name ?? $slug1->caption}}</h1>
            <nav>
              <ol class="breadcrumb my-3">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">{{$slug1->caption}}</a></li>
                @if(isset($slug_detail))
                  <li class="breadcrumb-item">{{$slug_detail->caption ?? ''}}</li>
                @endif
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

    <section class="sahid-services">
    <div class="container">
        <div class="row">
            <!----data here-->
            @foreach($services as $service)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-item">
                        <div class="service__icon">
                            <img src="{{$service->banner_image}}" onerror="this.onerror=null;this.src='/website/images/icon-8.png';">
                            <img src="{{$service->banner_image}}" onerror="this.onerror=null;this.src='/website/images/icon-8.png';">
                        </div><!-- /.service__icon -->
                        <div class="service__content">
                            <h4 class="service__title">{{$service->caption}}</h4>
                            <p class="service__desc">{{$service->short_content}}</p>
                          @if($slug1->nav_name!="services")
                            <a href="/{{$slug1->nav_name}}/{{$service->nav_name}}" class="btn btn-outline">
                              <span>Read More</span>
                              <i class="fa fa-arrow-right"></i>
                            </a>
                          @endif
                        </div><!-- /.service__content -->
                    </div>
                </div>
           @endforeach
            <!----data end----->
        </div>
    </div>
</section>

@endsection
