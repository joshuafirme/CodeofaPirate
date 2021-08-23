
<!-- navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">

		<div class="navbar-header"   style="margin-left: -20px;"  class="pull-left">
			<!-- to enable navigation dropdown when viewed in mobile device -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>

			<!-- Change "Your Site" to your site name -->
			<a class="navbar-brand" href="/"><img src="{{asset('images/traguy-logo.png')}}" width="40px" alt=""></a>
		</div>

		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				@if(Auth::check()) 
					@if(Auth::user()->access_level == 2)
					<li>
						<a href="/admin/product"> Admin Products</a>
					</li>
					@endif	
				@endif	
			</ul>

			<ul class="nav navbar-nav pull-right">
				<li>
					<a href="/#products-container"> Products</a>
				</li>
				@if(!Auth::check())
				<li>
					<a href="/#signup-container">Sign up</a>
				</li>
				
				<li>
					<a href="/login">Login</a>
				</li>
				@endif
				<li class="dropdown">
					
					@if(Auth::check())
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::check() == true ? Auth::user()->name : "" }} <span class="caret"></span></a>
					
						<ul class="dropdown-menu">
							<li><a href="/logout">Logout</a></li>
						</ul>
					@else
					<a href="#" aria-expanded="false">{{ Auth::check() == true ? Auth::user()->name : "" }} </a>	
					@endif	
					
				 </li>
			</ul>
		</div><!--/.nav-collapse -->

	</div>
</div>
<!-- /navbar -->

