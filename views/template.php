<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Biblioteca Online</title>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css" />
		<link rel="apple-touch-icon" sizes="180x180" href="./assets/icons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="./assets/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="./assets/icons/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
	</head>
	<body>

		<?php $this->loadViewInTemplate($viewName, $viewData); ?> 

		<footer class="footer">
        	<p>&copy; <?= date('Y') ?> Projeto I.A.  &middot; <a href="https://github.com/AugustoHartmann">Augusto</a> &middot; <a href="https://github.com/FranciscoMaier98">Francisco</a> &middot; <a href="https://github.com/CharlesMossmann">Charles</a></p>
    	</footer>

	</body>
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>