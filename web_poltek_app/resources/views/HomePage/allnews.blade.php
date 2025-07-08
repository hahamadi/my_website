@extends('HomePage.masterHome')
@section('containt')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<section class="module bg-dark-60 blog-page-header" data-background="url('img_girl.jpg')" style="background-image: url(&quot;https://drive.google.com/uc?id=1Nln5y4QbAtXyuyxA5SxCykkbsH0oB62u&quot;);">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">All News</h2>
                <div class="module-subtitle font-serif">Semua berita tentang Poltek Nuklir ada disini.</div>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row multi-columns-row post-columns">
            @foreach($datas as $data)
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-20">
                  <div class="post-thumbnail"><a href="#"><img src="{{$data->image}}" alt="Blog-post Thumbnail"/ style = "height: 200px;width:800px;"></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">{{$data->title}}</a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">{{$data->alias}}</a>&nbsp;| {{$data->date}}
                    </div>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
              @endforeach
              
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
	                navi[0].style.backgroundColor='rgba(255, 240, 0, 0.5)';
	            }
                else{
                    navi[0].style.backgroundColor='rgba(10, 10, 10, 0.0)';
                }
            })
        })
    </script>
@endsection