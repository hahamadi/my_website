<!DOCTYPE html>
  <html>
  
  <head>
      <title>How to Using Google Translate in Laravel</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  
  <body>
      <div class="container">
          <br><br>
          <div class="card">
              <div class="card-body">
                  <h1 class="text-center mb-3">Using Google Translate on Laravel</h1>
                  <div class="row">
                      <div class="col-md-2">
                          <strong>Select Language: </strong>
                      </div>
                      <form action="{{ url('lang') }}">
                          <div class="row">
                              <div class="col-lg-5">
                                  <select class="form-select changeLang" name="language">
                                      <option value="en" {{ session()->get('language') == 'en' ? 'selected' : '' }}>
                                          English
                                      </option>
                                      <option value="fr" {{ session()->get('language') == 'fr' ? 'selected' : '' }}>France
                                      </option>
                                      <option value="es" {{ session()->get('language') == 'es' ? 'selected' : '' }}>
                                          Spanish
                                      </option>
                                  </select>
                              </div>
                              <div class="col-lg-3">
                                  <button class="btn btn-primary">Change</button>
                              </div>
                          </div>
                      </form>
                  </div>
                  <br><br>
  
                  <h3>{{ GoogleTranslate::trans('hello everyone, welcome and happy learning', session()->get('language') ?? 'en') }}
                  </h3>
                  <h3>{{ GoogleTranslate::trans('practice using google translate on laravel', session()->get('language') ?? 'en') }}</h3>
              </div>
          </div>
  
      </div>
  </body>
  
  </html>