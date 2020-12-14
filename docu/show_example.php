<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>checkrobin business - Webshopconnect</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    
  </head>

  <body id="page-top">
  
  	<?php 
	if(isset($_GET['id'])){
		$nr_example = $_GET['id'];
		
		$view = false;
		if(isset($_GET['view'])) $view = true;
		
		$actionName = $view ? 'Viewing source of' : 'Running';
	?>
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav" style="color:white">
			<span><?php echo $actionName.' Example'.$nr_example.'';?></span>&nbsp; <a href="index.php" style="margin-left:20px;">BACK</a>
		</nav>
		<section id="code">
	<?php 
		if(isset($_GET['id'])){
			$filename = './../samples/example'.$nr_example.'.php';
			
			if($view){				
				$source = highlight_file($filename, true);
				echo $source;
			}else{
	?>
		
      		<div class="container_output">
      			<code>
	<?php  
				require_once $filename;
	?>		
				</code>
		    </div>
      	</section>
    <?php 
				
			}
		}
				
	}else{
	?>
		FAILED Your need a webserver with PHP support to run the samples.
		Please contact your administrator for help.
	<?php 
	}
	?>
  </body>

</html>