<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Brandan Lee Keller</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="http://brandanleekeller.com/images/riches.PNG" />
    <meta property="og:description" content="My name is Brandan Lee Keller, I'm a filmmaker from Metro Detroit, Michigan. Some of my work has been featured by Alternative Press, Hopeless Records, Fearless Records, Under the Gun Review, and Major League Baseball." />
    <meta property="og:title" content="Brandan Lee Keller" />
    <!-- Font Awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Cambay' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                background-color: #000;
                margin: 0;
                padding: 0;
                width: 98%;
                display: table;
                font-weight: 100;
                font-family: 'Cambay', sans-serif;
            }
        </style>
    </head>
    <div style="overflow-x:hidden">
        <body>

            <nav class="navbar navbar-default" style="background-color:#000;border:0px">
              <div class="container-fluid" style="background-color:#000;">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header" style="background-color:#000;">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" style="background-color:#fff;"></span>
                    <span class="icon-bar" style="background-color:#fff;"></span>
                    <span class="icon-bar" style="background-color:#fff;"></span>
                  </button>
                  <a class="navbar-brand" href="#" style="background-color:#000;color:#fff">Brandan Lee Keller</a>
                </div>
                  <ul class="nav navbar-nav navbar-left">
                        <select class="form-control" id="setvideo">
                    @foreach($videos as $video)
                            <option value="{{$video->url}}">{{$video->title}}</option>
                    @endforeach
                        </select>

                    <script type="text/javascript">
                        $('#setvideo').on('change', function(){
                            $('.videobox').attr('src', $(this).val());
                        });
                    </script>
                    </ul>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a target="_blank" style="color:#fff" href="https://www.flickr.com/photos/brandanleekeller" class="btn">
                            <i style="font-size:1.5em"class="fa fa-camera"></i>
                        </a>
                    </li>
                    <li>
                        <a style="color:#fff" target="_blank" href="https://www.facebook.com/brandanleekeller" class="btn">
                            <i style="font-size:1.5em"class="fa fa-facebook-official"></i>
                        </a>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>

            @yield('content')
        </body>
    </div>
</html>
