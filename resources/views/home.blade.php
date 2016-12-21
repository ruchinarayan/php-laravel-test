<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<form action="language" method="post">
<!--
{{ csrf_field() }}
  	@if (App::getLocale() == 'en')
		<button name="locale" type="submit" value="es">Spanish</button>
	@else
		<button name="locale" type="submit" value="en">English</button>
	@endif
</form>
{{ trans('language.hello') }}
-->
</body>
</html>