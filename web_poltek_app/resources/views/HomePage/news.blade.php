@extends('HomePage.masterHome')
@section('containt')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<section class="module bg-dark-60 blog-page-header" data-background="assets/images/blog_bg.jpg" style="background-image: url(&quot;https://drive.google.com/uc?id=1Nln5y4QbAtXyuyxA5SxCykkbsH0oB62u&quot;);">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">{{$datas[0]->title}}</h2>
                <div class="module-subtitle font-serif">{{$datas[0]->highlight}}</div>
              </div>
            </div>
          </div>
        </section>
        <section class="module-small">
          <div class="container">
            <div class="row">
              <div class="col-sm-8">
                <div class="post">
                  <div class="post-thumbnail"><img src="{{$datas[0]->image}}" alt="Blog Featured Image"/></div>
                  <div class="post-header font-alt">
                    <h1 class="post-title">{{$datas[0]->title}}</h1>
                    <div class="post-meta">By&nbsp;<a href="#">{{$datas[0]->alias}}</a>| {{$datas[0]->date}}
                    </div>
                  </div>
                  <div class="post-entry">
                  {{$datas[0]->content}}
                  </div>
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