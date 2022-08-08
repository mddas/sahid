
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
<!----full page---->
    <section class="department-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="department-detail">
					<h2>Neurology Department</h2>
					<p>Department of Neurology has aim of providing the best medical care in the evaluation and management of patients with various neurological disorders. It also aims to uplift the academic excellence in the field of Neurology.</p>

					<img src="/website/images/2.jpg" alt="banner">
					<ul class="list-items list-items-layout4 list-horizontal list-unstyled">
		              <li>Computed tomography (CT) or (CAT) scans</li>
		              <li>Seizure disorders, such as epilepsy</li>
		              <li>Magnetic resonance imaging (MRI)</li>
		              <li>Speech and language disorders</li>
		              <li>Electroencephalography (EEG)</li>
		              <li>Spinal cord disorders</li>
		              <li>Nerve conduction studies</li>
		            </ul>

		            <p>Department of Neurology has aim of providing the best medical care in the evaluation and management of patients with various neurological disorders. It also aims to uplift the academic excellence in the field of Neurology.</p>
				</div>
			</div>
			<div class="col-lg-4">
			<aside class="sidebar has-marign-left sticky-top">
              <div class="widget widget-services">
                <h5 class="widget__title">Medical Department</h5>
                <div class="widget-content">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#" class="active"><span>Neurology Department</span><i class="fa fa-arrow-right"></i></a></li>
                    <li><a href="#"><span>Cardiology Department</span><i class="fa fa-arrow-right"></i></a></li>
                    <li><a href="#"><span>Pathology Department</span><i class="fa fa-arrow-right"></i></a></li>
                    <li><a href="#"><span>Laboratory Department</span><i class="fa fa-arrow-right"></i></a></li>
                    <li><a href="#"><span>Pediatric Department</span><i class="fa fa-arrow-right"></i></a></li>
                    <li><a href="#"><span>Cardiac Department</span><i class="fa fa-arrow-right"></i></a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-services -->
              <div class="widget widget-help bg-overlay bg-img" style="background: url(/website/images/5.jpg) center center; background-size: cover;">
                <div class="widget-content">
                  <div class="widget__icon">
                    <i class="icon-call3"></i>
                  </div>
                  <h4 class="widget__title">Emergency Cases</h4>
                  <p class="widget__desc">Please feel welcome to contact our friendly reception staff with any general
                    or medical enquiry call us.
                  </p>
                  <a href="tel:015218921" class="phone__number">
                    <i class="icon-phone fa fa-phone"></i> <span>+977-01-5218921</span>
                  </a>
                </div><!-- /.widget-content -->
              </div>
            </aside>
			</div>
		</div>
	</div>
</section>

@endsection