<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="http://getbootstrap.com/favicon.ico">
        <title>@yield('title', 'ActivaLab')</title>
        <!-- BOOTSTRAP CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- FONT AWESOME CDN-->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- CUSTOM STYLES-->
        <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">    
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">                 
                    <!-- /left_col scroll-view -->
                    <div class="left_col scroll-view">
                        <!-- sidebarNavigation-->
                        <div class="navbar nav_title" style="border: 0;">
                            <a class="site_title">
                                <div id="box-icon-activa" class="back-color-default"> </div>
                                <div class="box-activa-default back-color-primary" id="title-text"> </div>
                            </a>
                        </div>
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <ul>
                                    <li><div class="box-activa-primary back-color-primary"> </div></li>
                                    <li><div class="box-activa-default back-color-default"> </div></li>
                                    <li><div class="box-activa-primary back-color-primary"> </div></li>
                                    <li><div class="box-activa-default back-color-default"> </div></li>
                                    <li><div class="box-activa-primary back-color-default"> </div></li>
                                    <li><div class="box-activa-primary back-color-primary"> </div></li>
                                    <li><div class="box-activa-default back-color-default"> </div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <!-- sidebarNavigation-->
                    </div>
                    <!-- /left_col scroll-view -->
                </div> <!-- col-md-3 left_col -->

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav class="" role="navigation">
                            <div class="nav toggle">
                                <div  id="icon-top-left" class="back-color-primary"></div>
                                <div id="icon-left-description" class="back-color-default"> </div>
                            </div>
                            <div class="settings">
                                <div  id="icon-top-right"  class="back-color-primary"></div>
                                <div class="icon-right-description"> </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="content" id="test-conection">
                        <h2 class="h2 text-center" id="t1"> Test Conection </h2>

                        <form class="form-horizontal" action="/databases" method="POST" id="formSelectDatabase">
                            <input type="hidden" value="{{ csrf_token() }}"  name="_token"> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                        <input type="text" class="form-control" id="password" name="password" placeholder="Enter your password ">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Database</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-database"></i></div>
                                        <input type="text" class="form-control" id="database" name="database"placeholder="Enter your database name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Port database</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-minus"></i></div>
                                        <input type="number" class="form-control" id="port" name="port" placeholder="Default 3306">
                                    </div>
                                </div>
                            </div>     
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <button type="submit" class="btn btn-primary" id="btnTest">Test</button>
                                    <button type="submit" class="btn btn-success" id="btnConnect">Connect</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /page content -->
            </div>
            <!-- /main_container-->
        </div>
        <!-- /container body -->

        <!-- JAVASCRIPT LIBRARY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="{{ URL::asset('js/custom.js') }}"></script>

    </body>
</html>
