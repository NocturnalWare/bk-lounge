<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Brandan Lee Keller</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="http://bansheepilot.com/images/bansheealbum.jpg" />
    <meta property="og:description" content="The Banshee Pilot is an Alternative, concept rock band rising from the post-apocalyptic remains of Detroit, MI." />
    <meta property="og:title" content="The Banshee Pilot" />
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
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
        </style>
    </head>
    <body>
        <div class="col-sm-12">
            <div class="col-sm-2">
                <a target="_blank" href="route('video.index')" class="btn btn-default">
                    <i style="font-size:2em"class="fa fa-video-camera"></i>
                </a>
            </div>
            <div class="col-sm-2">
                <a target="_blank" href="route('photo.index')" class="btn btn-default">
                    <i style="font-size:2em"class="fa fa-video-camera"></i>
                </a>
            </div>
        </div>
        @yield('content')
        <div class="row">
            <div class="col-xs-12">
                <center>
                    <a target="_blank" href="https://twitter.com/thebansheepilot" class="btn btn-default">
                        <i style="font-size:2em"class="fa fa-twitter"></i>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/thebansheepilot/" class="hidden btn btn-default">
                        <i style="font-size:2em"class="fa fa-instagram"></i>
                    </a>
                    <a target="_blank" href="https://www.facebook.com/brandanleekeller" class="btn btn-default">
                        <i style="font-size:2em"class="fa fa-facebook-official"></i>
                    </a>
                    <a target="_blank" href="https://thebansheepilotofficial.bandcamp.com/" class="btn btn-default">
                        <i style="font-size:2em"class="fa fa-music"></i>
                    </a>
                </center>
            </div>
        </div>
    </body>
</html>
