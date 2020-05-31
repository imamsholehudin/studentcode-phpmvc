<!DOCTYPE html>
<html>
	<head>
		<title>
			<?= $data['judul'];?>
		</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
	
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<div class ="container">
		  	<a class="navbar-brand" href="<?=BASEURL;?>">PHP Mvc</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>
		  	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    	<div class="navbar-nav">
			      <a class="nav-item nav-link active" href="<?= BASEURL;?>">Home <span class="sr-only">(current)</span></a>
			      <a class="nav-item nav-link" href="<?= BASEURL.'/About'; ?>">About</a>
			      <a class="nav-item nav-link" href="<?= BASEURL.'/Mahasiswa'; ?>">Mahasiswa</a>
	    		</div>
		  	</div>
		  		</div>
		</nav>
		<div class="container">