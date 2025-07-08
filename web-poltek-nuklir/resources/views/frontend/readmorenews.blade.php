@extends('frontend.master')
@section('containt')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<section class="module bg-dark-60 blog-page-header" data-background="assets/images/blog_bg.jpg">
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
                    <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                    <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </blockquote>
                    <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental.</p>
                    <ul>
                      <li>The European languages are members of the same family.</li>
                      <li>Their separate existence is a myth.</li>
                      <li>For science, music, sport, etc, Europe uses the same vocabulary.</li>
                    </ul>
                    <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                  </div>
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