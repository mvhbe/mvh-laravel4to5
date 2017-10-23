<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Visclub Moed &amp; Volharding Herenthout - @yield('pagetitle')</title>
    <meta name="description" content="@yield('pagedescription')"/>
    <meta name="keywords" content="visclub,mvh,Moed,Volharding,pauwelstraat,herenthout,moed &amp; volharding,moed en volharding,visclub moed &amp; volharding,vislcub moed en volharding"/>
    <meta name="author" content="Guido Van Hoof"/>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('css/usebootstrap.css') }}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ URL::asset('js/html5shiv.js') }}"></script>
    <script src="{{ URL::asset('js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>
    <div class="container-fluid">
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">Visclub Moed &amp; Volharding Herenthout</a>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>

        <div class="row"><br></div>

        <div class="row">
            <div class="col-md-2">
                <div class="list-group">
                    <a href="#" title="Navigatie" class="list-group-item active">Navigatie</a>
                    <a href="{{ URL::to('/') }}" title="Home" class="list-group-item">Home</a>
                    <a href="{{ URL::to('kalender') }}" title="Kalender" class="list-group-item">Kalender</a>
                    <a href="{{ URL::to('uitslagen') }}" title="Uitslagen" class="list-group-item">Uitslagen</a>
                    <a href="{{ URL::to('contact') }}" title="Contact" class="list-group-item">Contact</a>
                </div>

                <div class="list-group">
                    <a href="#" title="Archief" class="list-group-item active">Archief</a>
                    <a href="{{ URL::to('archief/kalenders') }}" title="Kalenders" class="list-group-item">Kalenders</a>
                    <a href="{{ URL::to('archief/uitslagen') }}" title="Uitslagen" class="list-group-item">Uitslagen</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="content">
                    <div class="page-content">
                        <!-- CONTENT -->
                    @yield('content')
                    <!-- END CONTENT -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row"><br><br></div>

        <div class="navbar navbar-default navbar-fixed-bottom">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">&copy; Guido Van Hoof</a>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/usebootstrap.js"></script>

</body>
</html>
