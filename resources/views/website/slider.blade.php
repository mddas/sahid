<div class="banner-slider">
    @foreach($sliders as $index=>$slider)
        @php
        $index = $index+1;
          if($index==1){
              $i = "one";
          }
          elseif($index==2){
              $i = "two";
          }
          elseif($index==3){
              $i="three";
          }
          else{
              $i = "four";
          }
        @endphp
        <div class="slider-{{$i}}">
            <div class="slider-{{$i}}-image" style="background-image: url({{$slider->banner_image}});">
                <div class="overlay"></div>
                <div class="slider-text">
                    <h1>Exceptional care ,
                        Every patient, Every Day.</h1>
                    <p>Making a nation prosperous is possible only through its healthy citizens</p>
                </div>
            </div>
        </div>
    @endforeach
   
</div>