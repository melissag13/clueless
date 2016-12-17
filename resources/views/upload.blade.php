<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	<title>Camera or Upload</title>

	<style type="text/css">
		
		body, html { height: 100%; }

		body{
			display: flex;
			justify-content: center;
			align-items: center;
		}

	</style>

</head>
<body class="container">

	<form method="POST" action="/outfits" enctype="multipart/form-data">
		{{ csrf_field() }}

		<input type="file" name="top"></input>

		<button type="submit">Save Top</button>


	
	</form>
	<form method="POST" action="/outfits" enctype="multipart/form-data">
		{{ csrf_field() }}

		<input type="file" name="bottom"></input>

		<button type="submit">Save Bottom</button>


	
	</form>
	<form method="POST" action="/outfits" enctype="multipart/form-data">
		{{ csrf_field() }}

		<input type="file" name="dress"></input>

		<button type="submit">Save Dress</button>


	
	</form>
	<form method="POST" action="/outfits" enctype="multipart/form-data">
		{{ csrf_field() }}

		<input type="file" name="accessories"></input>

		<button type="submit">Save Access</button>


	
	</form>

</body>
</html>