<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>WP API Request</title>
	</head>
	<body>

		<div class="posts">

		</div>

		<script type="text/javascript">
			// $.getJSON
			var request = new XMLHttpRequest();
			request.onreadystatechange = function() {
			  if (request.status >= 200 && request.status < 400) {
			    // Success!
			    var data = JSON.parse(request.responseText);
					console.log( data );
			  } else {
			    console.log( request );
			  }
			};
			request.onerror = function() {
			  console.log( 'A network error has occured' );
			};
			request.open('GET', 'http://livesite.dev/wp-json/wp/v2/posts', true);
			request.send();
		</script>

	</body>
</html>