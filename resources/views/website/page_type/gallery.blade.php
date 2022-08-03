@extends("layouts.master")
@section("content")
		
			<div class="theme-inner-banner">
				<div class="overlay">
					<div class="container">
						<h2>Gallery</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!-- 
			=============================================
				gallery
			============================================== 
			-->
			@if(isset($photos))
			<section class="section-spacing">
				<div class="container">
					<div class="gallery-view">
		                <div class="row" id="lightgallery"> 
							<!----gallary data----->
							@foreach($photos as $photo)
								<div class="item col-md-3" data-src="uploads/photo_gallery/{{$photo->file}}" data-sub-html="{{$photo->caption}}">
									<a href="">
										<img src="uploads/photo_gallery/{{$photo->file}}" alt="{{$photo->caption}}"/>
										<div class="gallery-overlay"><img src="uploads/photo_gallery/{{$photo->file}}"></div>
									</a>
								</div>
							@endforeach
						  <!----gallary data close----->
		                </div>
		            </div>
          		</div>
			</section>
		  @endif
		  		<!-- gllery js -->
	    <script src="/website/js/gallery/picturefill.min.js"></script>
	    <script src="/website/js/gallery/lightgallery.js"></script>
	    <script src="/website/js/gallery/lg-pager.js"></script>
	    <script src="/website/js/gallery/lg-autoplay.js"></script>
	    <script src="/website/js/gallery/lg-fullscreen.js"></script>
	    <script src="/website/js/gallery/lg-zoom.js"></script>
	    <script src="/website/js/gallery/lg-hash.js"></script>
	    <script src="/website/js/gallery/lg-share.js"></script>
	    <!--End gllery js -->

		<!-- Theme js -->
		<script src="js/theme.js"></script>

		<script>
        lightGallery(document.getElementById('lightgallery'));

        $(function() {
        var selectedClass = "";
        $(".filter").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#lightgallery").fadeTo(100, 0.1);
        $("#lightgallery div").not("."+selectedClass).fadeOut().removeClass('animation');
        setTimeout(function() {
        $("."+selectedClass).fadeIn().addClass('animation');
        $("#lightgallery").fadeTo(300, 1);
        }, 300);
        });
        });
    	</script>
    @endsection
    