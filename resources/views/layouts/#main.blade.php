<html>
	<head>
		<title>Laravel 5 - @yield('page_title')</title>
		{!! HTML::style('bootstrap/css/bootstrap.min.css') !!}
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#">LARAVEL</a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <form class="navbar-form navbar-right">
	            <div class="form-group">
	              <input type="text" placeholder="Email" class="form-control">
	            </div>
	            <div class="form-group">
	              <input type="password" placeholder="Password" class="form-control">
	            </div>
	            <button type="submit" class="btn btn-success">Sign in</button>
	          </form>
	        </div><!--/.navbar-collapse -->
	      </div>
	    </nav>

	    <div class="jumbotron">
	    	<div class="container">
			@yield('content')
			</div>
	    </div>

	    <div class="container">
	      <!-- Example row of columns -->
		    <div class="row">
		        <div class="col-md-4">
		          <h2>Heading</h2>
		          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		        </div>
		        <div class="col-md-4">
		          <h2>Heading</h2>
		          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		        </div>
		        <div class="col-md-4">
		          <h2>Heading</h2>
		          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		        </div>
		    </div>
      	    <hr>

	      	<footer>
	        <p>&copy; 2015 Company, Inc.</p>
	      	</footer>
	    </div> <!-- /container -->
		
		{!! HTML::script('js/jquery.min.js') !!}
		{!! HTML::script('bootstrap/js/bootstrap.min.js') !!}
	</body>
</html>
