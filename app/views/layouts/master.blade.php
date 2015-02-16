<!DOCTYPE HTML>
<html lang="ja">
@include('layouts.head')
<body>
	<div class="container">
		<div class="row">
			<header class="col-sm-12">
				@include('layouts.header')
				{{-- Form::active_form(); --}}
			</header>
		</div><!-- /.row -->
	</div><!-- #container -->

	<div class="container">
		<div class="row">
			<div id="content" class="col-sm-12" style="padding:10px;">
				@yield('content')
			</div><!-- /#content -->
		</div><!-- /.row -->
	</div><!-- /.container -->

	<div class="container">
		<div class="row">
			<footer class="col-sm-12" style="margin:10px;background:#eee;">
				@include('layouts.footer')
			</footer>
		</div><!-- /.row -->
	</div><!-- .container -->

{{HTML::script('js/function.js')}}
</body>
</html>
