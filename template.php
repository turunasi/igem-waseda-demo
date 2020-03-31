<!DOCTYPE html>
<html>
<head>
	@yield('head')
</head>
<body>
	<header>
		@yield('header')
	</header>
	<div class="wrapper">
		@yield('content')
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">

  M.AutoInit();

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.scrollspy');
    var instances = M.ScrollSpy.init(elems,{"scrollOffset":50});
  });

</script>
</html>
