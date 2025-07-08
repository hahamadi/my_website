@extends('frontend.master')
@section('containt')
<section class="home-section bg-dark-30" id="home" data-background="assets/images/section-5.jpg">
        <div class="video-player" data-property="{videoURL:'https://youtu.be/gpOL94CNMbw?t=66', containment:'.home-section', startAt:20, mute:false, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
        <div class="video-controls-box">
          <div class="container">
            <div class="video-controls"><a class="fa fa-volume-up" id="video-volume" href="#">&nbsp;</a><a class="fa fa-pause" id="video-play" href="#">&nbsp;</a></div>
          </div>
        </div>
        <div class="titan-caption">
          <div class="caption-content">
            <!-- &amp;-->
            <div class="font-alt mb-30 titan-title-size-1">Sugeng Rawuh</div> 
            <div class="font-alt mb-40 titan-title-size-3">Politeknik Teknologi Nuklir Indonesia </br>
            Poltek Nuklir

            </div><a class="section-scroll btn btn-border-w btn-round" href="#about">Learn More</a>
          </div>
        </div>
      </section>
      <div class="main">
        <section class="module" id="about">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt">Selamat Datang di Poltek Nuklir</h2>
                <div class="module-subtitle font-serif large-text">Politeknik Teknologi Nuklir Indonesia (Poltek Nuklir) BRIN adalah 
                  Perguruang Tinggi Vokasi satu satunya di Indonesia yang mempelajari Teknologi Nuklir.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-2 col-sm-offset-5">
                <div class="large-text align-center"><a class="section-scroll" href="#news_poltek"><i class="fa fa-angle-down"></i></a></div>
              </div>
            </div>
          </div>
        </section>
        <hr class="divider-w">
        <section class="module" id="news_poltek">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Latest News</h2>
              </div>
            </div>
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
                  <div class="post-more"><a class="more-link" href="{{ route('allnews.news',$data->uid) }}">Read more</a></div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </section>
        <section class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-8 col-lg-6 col-lg-offset-2">
                <div class="callout-text font-alt">
                  <h3 class="callout-title">Want to see more News?</h3>
                  <p>We are always update our News.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="callout-btn-box"><a class="btn btn-w btn-round" href="{{ route('allnews') }}">Lets view other news</a></div>
              </div>
            </div>
          </div>
        </section>
        <section class="module bg-dark parallax-bg landing-screenshot" data-background="assets/images/landing/screenshot_bg.png" style="background-image: url(&quot;assets/images/landing/screenshot_bg.png&quot;);">
            <h2 class="module-title font-alt">Kegiatan Terbaru Poltek Nuklir</h2>
            <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
            </div>
            <div class="template-1">
              <div class="container-agenda">
              @foreach($datasAgenda as $da)
                <div class="card-agenda">
                  <div class="face face1">
                    <div class="content">
                      <div class="icon">
                        <img src="{{$da->link_img}}" alt="Blog-post Thumbnail" style = "height: 200px;width:800px;">
                      </div>
                    </div>
                  </div>
                  <div class="face face2">
                    <div class="content">
                      <h3>
                          {{$da->name}}
                      </h3>
                      <p>
                          Tanggal Mulai: {{$da->startdate_event}};<br>
                          Tanggal Akhir: {{$da->enddate_event}};</br>
                          Waktu: {{$da->time}};</br>
                          Lokasi: {{$da->location}};
                      <p>
                      <p>{!! html_entity_decode($da->description) !!}</p>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
                             
        </section>
        <section class="module-small">
          <a href="{{ route('allagenda') }}"><button class="btn btn-danger btn-circle" type="button">Load More...</button>
        </section>
        <hr class="divider-w">
        <section class="module" id="services">
          <h2 class="module-title font-alt">Poltek Nuklir Achievments</h2>
          <div class="splide">
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide">
                    <div class="card-template">
                    <div class="imgBx">
                        <img src="https://images.unsplash.com/photo-1532123675048-773bd75df1b4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="images">
                    </div>
                    <div class="details">
                        <h2>SomeOne Famous<br><span>Director</span></h2>
                    </div>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="card-template">
                  <div class="imgBx">
                      <img src="https://images.unsplash.com/photo-1549417229-aa67d3263c09?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="images">
                  </div>
                  <div class="details">
                      <h2>SomeOne Famous<br><span>Producer</span></h2>
                    </div>
                </div>
                </li>
                <li class="splide__slide">
                  <div class="card-template">
                  <div class="imgBx">
                      <img src="https://images.unsplash.com/photo-1548094878-84ced0f6896d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="images">
                  </div>
                  <div class="details">
                      <h2>SomeOne Famous<br><span>Actor</span></h2>
                    </div>
                </div>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <section class="module bg-dark-60" data-background="assets/images/section-6.jpg" style="background-image: url(&quot;assets/images/section-6.jpg&quot;);">
          <div class="container-social-media">
          <h2 class="module-title font-alt">Follow Sosial Media Poltek Nuklir</h2>

                <figure class="snip1543">
                  <iframe width="900" height="600" src="https://www.youtube.com/embed/gpOL94CNMbw?si=jWXD5D8fOlg3VtmZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  <figcaption>
                    <h3>Youtube poltek Nuklir</h3>
                    <p>Silahkan dapat follow akun Youtube kami di polteknuklir.</p>
                  </figcaption>
                  <a href="https://www.youtube.com/@polteknuklir1706"></a>
                </figure>

                <figure class="snip1543">
                  <iframe width="900" height="600" src="https://www.instagram.com/reel/CxuZtvaiuaT/embed/" frameborder="0"></iframe>
                  <figcaption>
                    <h3>Instagram Poltek Nuklir</h3>
                    <p>Follow Instagram kami di @polteknuklir </p>
                  </figcaption>
                  <a href="https://www.instagram.com/polteknuklir/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="></a>
                </figure>
                
                <script>
                    
                    /* Demo purposes only */
                $(".hover").mouseleave(
                  function() {
                    $(this).removeClass("hover");
                  }
                );
                </script>

          </div>
        </section>
        <section class="module" id="team">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Meet Our Alumny</h2>
                <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
            <div class="row">
              <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="assets/images/team-1.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Hi all</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">Jim Stone</div>
                    <div class="team-role">Art Director</div>
                  </div>
                </div>
              </div>
              <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="assets/images/team-2.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Good day</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">Andy River</div>
                    <div class="team-role">Creative director</div>
                  </div>
                </div>
              </div>
              <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="assets/images/team-3.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Hello</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">Adele Snow</div>
                    <div class="team-role">Account manager</div>
                  </div>
                </div>
              </div>
              <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="assets/images/team-4.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Yes, it's me</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">Dylan Woods</div>
                    <div class="team-role">Developer</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial" data-background="assets/images/testimonial_bg.jpg">
          <div class="testimonials-slider pt-140 pb-140">
            <ul class="slides">
              <li>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="module-icon"><span class="icon-quote"></span></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <blockquote class="testimonial-text font-alt">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</blockquote>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                      <div class="testimonial-author">
                        <div class="testimonial-caption font-alt">
                          <div class="testimonial-title">Jack Woods</div>
                          <div class="testimonial-descr">SomeCompany INC, CEO</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="module-icon"><span class="icon-quote"></span></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <blockquote class="testimonial-text font-alt">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</blockquote>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                      <div class="testimonial-author">
                        <div class="testimonial-caption font-alt">
                          <div class="testimonial-title">Jim Stone</div>
                          <div class="testimonial-descr">SomeCompany INC, CEO</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="module-icon"><span class="icon-quote"></span></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <blockquote class="testimonial-text font-alt">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</blockquote>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                      <div class="testimonial-author">
                        <div class="testimonial-caption font-alt">
                          <div class="testimonial-title">Adele Snow</div>
                          <div class="testimonial-descr">SomeCompany INC, CEO</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section class="module-small p-0">
          <div class="container">
            <div class="row client">
              <div class="owl-carousel text-center owl-loaded owl-drag" data-items="6" data-pagination="false" data-navigation="false">
              <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1170px, 0px, 0px); transition: all 0s ease 0s; width: 4095px;"><div class="owl-item cloned" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-4.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-5.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-1.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-2.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-3.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-4.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item active" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-1.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item active" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-2.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item active" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-3.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item active" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-4.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item active" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-5.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item active" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-1.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-2.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-3.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-4.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-1.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-2.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-3.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-4.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-5.png" alt="Client Logo"></div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 195px;"><div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-1.png" alt="Client Logo"></div>
                  </div>
                </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div>
            </div>
          </div>
        </section>
@endsection