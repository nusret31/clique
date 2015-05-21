<!DOCTYPE.html>
<html>
<head>
	<title>LEAGUE GOTHIC</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">

  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

  <script>

  	$(document).ready(function() {
	   $(this).prev('li').animate({
    'opacity': 0
});

$('li').bind({
    mouseenter: function () {
        $(this).prev('li').animate({
            'opacity': 1
        });
    },
    mouseleave: function () {
        $(this).prev('li').animate({
            'opacity': 0
        });
    }
});
    });

  </script>

</head>
<body>

<ul>
    <li><a href="#">C</a></li>
	<li><a href="#">L</a></li>
    <li><a href="#">I</a></li>
    <li><a href="#">Q</a></li>
    <li><a href="#">U</a></li>
    <li><a href="#">E</a></li>
</ul>

</body>
</html>