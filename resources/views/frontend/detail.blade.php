<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>
    <!-- Bootstrap -->
    <link href = "{{ asset("bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" />
    <link href = "{{ asset("css/frontend/style.css") }}" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>    <![endif]-->
</head>
<body>
<div class="container">
    <div class="text-center">
        <h3>{{ $post->title }}</h3>
    </div>
    <ul class="nav nav-tabs nav-justified navbar-btn bg-info">
        <li class="active"><a data-toggle="tab" href="#info"><h4>Thông Tin</h4></a></li>
        <li><a data-toggle="tab" href="#images"><h4>Hình Ảnh</h4></a></li>
    </ul>
    <div class="tab-content">
        <div id="info" class="tab-pane fade in active">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>{{ $post->description }}</p>
                </div>
            </div>
        </div>
        <div id="images" class="tab-pane fade">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{ asset("/$post->image") }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset("/$post->image") }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset("/$post->image") }}" alt="">
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span
                            class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a> <a
                        class="right carousel-control" href="#myCarousel" data-slide="next"> <span
                            class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a>
            </div>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('jquery/jquery.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>