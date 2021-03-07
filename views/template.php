<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Recomendação de Livros S.A.</title>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css" />
	</head>
	<body>

		<?php $this->loadViewInTemplate($viewName, $viewData); ?> 

		<footer class="footer" style="background-color: #BBB; font-family: 'Roboto', sans-serif;">
        	<p>&copy; <?= date('Y') ?> Projeto I.A.  &middot; <a class="links"href="https://github.com/AugustoHartmann">Augusto</a> &middot; <a class="links" href="https://github.com/FranciscoMaier98">Francisco</a> &middot; <a class="links" href="https://github.com/CharlesMossmann">Charles</a></p>
    	</footer>

	</body>
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>