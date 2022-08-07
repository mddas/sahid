
@extends("layouts.master")
@section("content")

<section class="page-title page-title-layout5 bg-img" style="background-image: url(/website/images/6.jpg) !important; background-size: cover; background-position: center center; padding-top: 120px;">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-between flex-wrap align-items-center">
            <h1 class="pagetitle__heading my-3">{{$slug_detail->nav_name ?? $slug1}}</h1>
            <nav>
              <ol class="breadcrumb my-3">
                <li class="breadcrumb-item"><a href="#">{{$slug1}}</a></li>
                <li class="breadcrumb-item">{{$slug_detail->nav_name ?? ''}}</li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

    <section class="department-page bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="department-detail">
					<h2 id="introduction">{{$normal->caption}}</h2>
					<p>@php echo $normal->long_content ; @endphp</p>
					<img src="{{$normal->banner_image}}">		       
				</div>
			</div>
		</div>
	</div>
</section>

@endsection