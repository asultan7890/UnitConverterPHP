<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Unit Converter</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">  

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Unit Converter</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#page-top">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#length">Length</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#speed">Speed</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#force">Force</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Header-->  
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Metric and Imperial Unit Converter</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">This website will convert standard units of length, speed, and force from Metric to Imperial, or vice versa. </p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#length">Try it out!</a>
          </div>
        </div>
      </div>
    </header>

     <!--Length Conversion-->   
    <section class="bg-primary" id="length">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Length Conversion</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">
    
            <form action="#length" method="post">     
                <input placeholder="Enter meter value" type="text" name="from_meter" id="from_meter" />
                <input type="submit" id="m_to_f" value="Meter to Feet" />

            </form>
              
            <form action="#length" method="post">
                <input placeholder="Enter feet value" type="text" name="from_feet" id="from_feet" /> 
                <input type="submit" id="f_to_m" value="Feet to Meter" />
              
            </form>  
              
<?php      
    function m_to_f(){
        //gets input from user
        if (isset($_POST['from_meter'])){
        $input = $_POST['from_meter'];
        //check if number is entered    
        if(is_numeric($input)){
            //perform calculation
            $result = $input * 3.28084;
            //print results
            echo "<br><span class=\"php_result\">$input meters = $result feet</span>";
    }}}
    m_to_f();  
              
    function f_to_m(){
        //gets input from user
        if (isset($_POST['from_feet'])){
        $input = $_POST['from_feet'];
        //check if number is entered    
        if(is_numeric($input)){
            //perform calculation
            $result = $input * 0.3048;
            //print results
            echo "<br><span class=\"php_result\">$input feet = $result meters</span>";
    }}}
    f_to_m();
?>

          </div>
        </div>
      </div>
    </section>

     <!--Speed Conversion-->   
    <section id="speed">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Speed Conversion</h2>
            <hr class="my-4">
              
            <form action="#speed" method="post">
                <input placeholder="Enter km/h value" type="text" name="from_k" id="from_k"/> 
                <input type="submit" id="k_to_miles" value="Km/h to Mph" />
              
            </form> 
              
            <form action="#speed" method="post">
                <input placeholder="Enter mph value" type="text" name="from_miles" id="from_miles"/> 
                <input type="submit" id="miles_to_k" value="Mph to Km/h" />
              
            </form>
              
<?php         
    function k_to_miles(){
        //gets input from user
        if (isset($_POST['from_k'])){
        $input = $_POST['from_k'];
        //check if number is entered    
        if(is_numeric($input)){
            //perform calculation
            $result = $input * 0.621371;
            //print results
            echo "<br><span class=\"php_result_black\">$input km/h = $result mph</span>";
    }}}
    k_to_miles();              

    function miles_to_k(){
        //gets input from user
        if (isset($_POST['from_miles'])){
        $input = $_POST['from_miles'];
        //check if number is entered    
        if(is_numeric($input)){
            //perform calculation
            $result = $input * 1.60934;
            //print results
            echo "<br><span class=\"php_result_black\">$input mph = $result km/h</span>";
    }}}
    miles_to_k();
?>
      
          </div>
        </div>
      </div>

    </section>

    <!--Force Conversion--> 
    <section class="bg-dark text-white" id ="force">
      <div class="container text-center">
        <h2 class="mb-4">Force Conversion</h2>
        <hr class="light my-4"> 
          
        <form action="#force" method="post">
            <input placeholder="Enter newton value" type="text" name="from_n" id="from_n"/> 
            <input type="submit" id="n_to_lbf" value="Newton to Pound-force" />
              
        </form>     
        
        <form action="#force" method="post">
            <input placeholder="Enter pound-force value" type="text" name="from_lbf" id="from_lbf"/> 
            <input type="submit" id="lbf_to_n" value="Pound-force to Newton" />
          
        </form>  
          
<?php      
    function n_to_lbf(){
        //gets input from user
        if (isset($_POST['from_n'])){
        $input = $_POST['from_n'];
        //check if number is entered
        if(is_numeric($input)){
            //perform calculation
            $result = $input * 0.224809;
            //print results
            echo "<br><span class=\"php_result\">$input N = $result lbf</span>";
    }}}
    n_to_lbf();
          
    function lbf_to_n(){
        //gets input from user
        if (isset($_POST['from_lbf'])){
        $input = $_POST['from_lbf'];
        //check if number is entered    
        if(is_numeric($input)){
            //perform calculation
            $result = $input * 4.44822;
            //print results
            echo "<br><span class=\"php_result\">$input lbf = $result N</span>";
    }}}
    lbf_to_n();
?>
          
      </div>
    </section>

 
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.js"></script>
    <script src="js/conversion.js"></script>  

  </body>

</html>
