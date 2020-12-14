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
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Home</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          	<li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#howitworks">How it works</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Examples</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/cr_logo-big.png" alt="">
        <h1 class="text-uppercase mb-0">Webshopconnect Library</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">for PHP (5.3+ up to 7.3)</h2>
      </div>
    </header>
    
    
    <!-- Usage Section -->
    <section id="howitworks">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">How it works</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
          	<h4>Introduction</h4>
          	<p>
          	checkrobin offers access to a RESTful API which enables programmers to submit parcel orders directly to the checkrobin business portal for further processing.
          	To shorten the software development cycle, we also provide a <i>Webshopconnect Class Library</i> that encapsules all communication to the mentioned API.
          	</p>
          	<p>
          	This document is intended for webshop developers and webshop hosts. If you don't know what kind of service checkrobin Business provides or you want to find out more about checkrobin in general, please visit our <a href="http://business.checkrobin.com/de/hilfe-support" target="_blank">Support Center</a> first.
          	</p>
            There are two potential methods how to implement a plugin for the checkrobin business API:
            <ol type="A">
            	<li><b>Download from <a href="https://github.com/checkrobin/Webshopconnect" target="_blank">Github Repository</a> and use this Webshopconnect Class library for PHP out of the box</b> (highly recommended)</li>
            	<li><b>Implement your own connection to the</b> <a href="http://api-docu.checkrobin.com" target="_blank">checkrobin business API</a> <br/>(for advanced programmers and non PHP applications)</li>
            </ol>
            <h4>Workflow</h4>
            The following schematic describes the different steps of interaction split between webshop and business.checkrobin backend.<br/>
            It is important to keep in mind that all shipment related logic, i.e. selection of a logistics partner and product, packaging and label printing are done in the checkrobin backend. There is no synch of status changes on those steps back into the webshop!
            <img src="img/architecture_overview.png" alt="architecture of workflow">
            <br/>
            <br/>
            <h4>Environments</h4>
            We provide separate Live and Staging versions of our API.
            <br/> 
            <table class="envi_table">
            	<tr><td>LIVE</td><td>api-business.checkrobin.com</td></tr>
            	<tr><td>STAGING</td><td>api-business-stage.checkrobin.com</td></tr>
            </table>
            <br/>
            All development and testing on your side should query the Staging URL. You can change the API URL in file <code>/config/settings.php</code>, if required.
            <p>
            In order to interact with the API you first need to sign up with checkrobin to set up a user and password, which can then be used to retrieve an Auth Token for all further webshop communication with the API.
            <br/><i>Please <a href="mailto:david.tschische@checkrobin.com?subject=Webshopconnect - Request for a free staging account">let us know</a> if we can assist you in setting up a user account for you!</i>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Examples</h2>        
        <hr class="star-dark mb-5">
        If you chose to use the Webshopconnect Library provided by checkrobin, you can build on a number of prepared coding examples for PHP.
        All examples are available as documented source code under the path <code>/samples</code> of this download from <a href="https://github.com/checkrobin/Webshopconnect" target="_blank">Github Repository</a>.<br/>
        <div id="system_requirements" style="">
        <b>System requirements:</b> 
        <ul style="list-style-type: none;">
        	<li><a href="http://php.net/" target="_blank">PHP</a> 5.3, 5.4, 5.5, 5.6, 7.0 or 7.2</li>
        	<li><a href="https://curl.haxx.se/" target="_blank">cURL</a> installed on your server</li>
        </ul>
        We provide a test script <code>check_requirements.php</code> that can be run to find out if the prerequisites are met by your infrastructure.
        </div>
        
        <div class="row">
        
          <div class="col-md-6 col-lg-4">
          	<span class="caption_example">Authenticaton Token Handling</span>
            <a class="portfolio-item d-block mx-auto" href="show_example.php?id=1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-rocket fa-3x"></i> run now...                
                </div>
              </div>
              
              <img class="img-fluid" src="img/portfolio/bg_example1.png" alt="">
              
            </a>
            <a class="btn btn-primary btn-sm" href="show_example.php?id=1&view=true"><i class="fa fa-code"></i>&nbsp;View source</a>
          </div>
          
          <div class="col-md-6 col-lg-4">
          	<span class="caption_example">Create a Parcel</span>
            <a class="portfolio-item d-block mx-auto" href="show_example.php?id=2">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-rocket fa-3x"></i> run now...
                </div>
              </div>
              
              <img class="img-fluid" src="img/portfolio/bg_example2.png" alt="">
             
            </a>
            <a class="btn btn-primary btn-sm" href="show_example.php?id=2&view=true"><i class="fa fa-code"></i>&nbsp;View source</a>
          </div>
          <div class="col-md-6 col-lg-4">
          	<span class="caption_example">Delete a Parcel</span>&nbsp; <input type="number" value="" min="1" id="delete_id" placeholder="parcel pk" class="input_delete">
            <a class="portfolio-item d-block mx-auto" href="show_example.php?id=3" id="anchor_example3">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-rocket fa-3x"></i> run now...
                </div>
              </div>
             
              <img class="img-fluid" src="img/portfolio/bg_example3.png" alt="">
              
            </a>
            <a class="btn btn-primary btn-sm" href="show_example.php?id=3&view=true"><i class="fa fa-code"></i>&nbsp;View source</a>
          </div>        
        </div>
        
        <br/><br/>
        <h4>Configuration and Debugging</h4>
        During development you may want to enable more verbose error messaging and detailed cURL ouput. 
        There is a line <code>DEFINE('ENVIRONMENT', 'STAGE')</code> on top of the file <code>/environment.php</code> that can be set to <code>"DEV"</code> to reach this behaviour.<br/>
        (The examples above have been rendered that way.)
        
        <br/><br/>
        
        <h4>Composer</h4>
        
        If you opt to use the tool Composer to set up your project and resolve dependencies, you may certainly do so.
        Here is how your <code>composer.json</code> should look like:
        <pre class="external_file">
		            
        {
		    "repositories": [
		        {
		            "type": "vcs",
		            "url": "https://github.com/checkrobin/Webshopconnect"
		        }
		    ],
		    "require": {
		        "checkrobin/webshopconnect": "dev-master"
		    }
        }        
        </pre>
        
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">The sourcecode provided by checkrobin can be used free of charge. Conditions apply, refer to <a href="/../LICENSE.txt" target='_blank' class="aboutlink">LICENSE.txt</a> for details!</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">All examples have been put together with utmost care. If you encounter any unexpected errors or questions remain, feel free to drop us an <a href="mailto:david.tschische@checkrobin.com?subject=Webshopconnect - Support" class="aboutlink">email</a>.</p>
          </div>
        </div>
        
      </div>
    </section>

    
    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">
            		checkrobin GmbH <br/>
					Linsengasse 57	<br/>						
              		A-9020 Klagenfurt
            </p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0" style="font-size:12px">
            <h4 class="text-uppercase mb-4">Legal Notice</h4>
            Firmensitz: Klagenfurt<br/>
			Firmenbuchnummer: FN 388462v<br/>
			Firmenbuchgericht: Handelsgericht Wien<br/>
			Kammerzugehörigkeit: Wirtschaftskammer Österreich<br/>
			Umsatzsteueridentifikationsnummer: ATU 67 58 42 69<br/>
			Umsatzsteueridentifikationsnummer: DE 31 11 65 335<br/>
			DVR Nummer: 4016697/001<br/>
			Geschäftsführer: Hannes Jagerhofer
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">Contact</h4>
            <p class="lead mb-0">
			Tel.: +43 1 49 49 297 0 <br/>
			E-Mail: <a href="mailto:info@checkrobin.com?subject=Webshopconnect - Info">info@checkrobin.com</a><br/>
			Web: <a href="https://business.checkrobin.com" target="_blank">business.checkrobin.com</a>
			</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright 2018 &copy; checkrobin GmbH</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    
   

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>


    <!-- Custom scripts for this template -->
    <script src="js/docu.js"></script>
    
    <script type="text/javascript">
	    $(document).ready (function () {
	        $('#anchor_example3').click(function(e) {

	        	e.preventDefault();
	        	
	        	var target = $(this).attr('href');
				var delete_id = $('#delete_id').val();

				if(delete_id == ""){
					alert("Please chose existing parcel pk for demonstration of delete action!");
					$('#delete_id').addClass("error");
				}else{	        	
					window.location.href = target+'&delete_id='+delete_id;
				}
	        });
	    });

    </script>

  </body>

</html>