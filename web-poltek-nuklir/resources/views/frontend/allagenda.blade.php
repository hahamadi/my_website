@extends('frontend.master')
@section('containt')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<section class="module bg-dark-60 gallery-page-header parallax-bg" data-background="assets/images/gallery_bg.jpg" style="background-image: url(&quot;assets/images/gallery_bg.jpg&quot;);">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Gallery</h2>
                <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
          </div>
</section>
<section class="module">
          <div class="container">
            <div class="row multi-columns-row">
            @foreach($datas as $data)
              <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="gallery-item">
                  <div class="gallery-image" style="width:585px;height:329px;"><a class="gallery" href="{{ $data->link_img }}" title="Title 1"><img src="{{ $data->link_img }}" alt="Gallery Image 1">
                      <div class="gallery-caption" style="width:585px;height:329px;">
                        <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                      </div></a></div>
                </div> 
              </div>
            @endforeach
            </div>
          </div>
          <div class="pagination font-alt">
                {{ $datas->links() }}
        </div>
</section>

<script type="text/javascript">
        $(document).ready(function(){
            $(window).scroll(function(){
  	            var scroll = $(window).scrollTop();
                const navi = document.getElementsByClassName("navbar navbar-custom navbar-fixed-top navbar-transparent"); 
	            if (scroll > 0) {
	                navi[0].style.backgroundColor='rgba(10, 10, 10, 0.5)';
	            }
                else{
                    navi[0].style.backgroundColor='rgba(10, 10, 10, 0.0)';
                }
            })
        })
    </script>
@endsection