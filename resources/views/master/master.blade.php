<!DOCTYPE html>
<html lang="en"><head>
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
    					@include('master.sidebarNavigation');        					
    					<!-- sidebarNavigation-->
		    		</div>
			    	<!-- /left_col scroll-view -->
		    	</div> <!-- col-md-3 left_col -->

			    <!-- top navigation -->
			    	@include('master.topNavigation')
				<!-- /top navigation -->

				<!-- page content -->
				<div class="right_col" role="main">
					<div class="content">
						@yield('content');
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