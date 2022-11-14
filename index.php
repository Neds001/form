<!DOCTYPE html>
<html>
<head>
	<title>Email Validator</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
	<form method="POST" action="validator.php" class="mx-5">
		<label for="email">Email:
		<input type="email" name="email" id="email" autocomplete="off">
		</label>
		<button class="btn btn-primary my-5">Check</button>
	</form>
</body>
</html>