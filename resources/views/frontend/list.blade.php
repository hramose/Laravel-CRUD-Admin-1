<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>
    <!-- Bootstrap -->

    <link href="{{ asset("bootstrap/css/bootstrap.min.css") }}" rel="stylesheet"/>
    <link href="{{ asset("css/frontend/style.css") }}" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="row">
                <form class="navbar-form" role="search">
                    <div class="input-group add-on">
                        <input class="form-control" placeholder="Nhập từ khóa" name="srch-term" id="srch-term"
                                type="text">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-9 col-sm-9 col-md-9">
            <div class="row display-flex">
                @foreach($posts as $post)
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="thumbnail">
                            <a href="post/{{ $post->id }}"><img src="{{ asset("/$post->thumbnail") }}"
                                        alt="{{ $post->title }}"></a>
                            <div class="caption">
                                <a href="post/{{ $post->id }}"><h4>{{ $post->title }}</h4></a>
                                <p>{{ $post->caption }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="text-center">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="row">
                <div class="col-xs-3 col-sm-3">
                    <div class="navbar-nav navbar-fixed affix">
                        <div class="well">
                            <ul class="nav">
                                <li class="nav-header">Danh sách</li>
                                @foreach($posts as $post)
                                    <li><a href="post/{{ $post->id }}">{{ $post->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
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