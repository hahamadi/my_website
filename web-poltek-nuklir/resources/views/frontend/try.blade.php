<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
</head>
<body>
<section class="module" id="news">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Latest blog posts</h2>
              </div>
            </div>
            <div class="row multi-columns-row post-columns">
              @foreach($datas as $data)
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-20">
                  <div class="post-thumbnail"><a href="#"><img src="{{$data->image}}" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">{{$data->Title}}</a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">{{$data->alias}}</a>&nbsp;| {{$data->date}}
                    </div>
                  </div>
                  <div class="post-entry">
                    <p>{{$data->containt}}</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </section>
</body>