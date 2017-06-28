<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Math Quiz App</title>
  
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  

  
</head>
<body>
  <div class="container-fluid text-center">
    <div id="display" class="well col-xs-6">
      <div id="try-screen">
        <p id="try">Try Again</p>
        
        <p id="final-score">Your score was 0.</p>
        <button id="restart-button">RESTART</button>
      </div>
      
      <div id="working-screen">
        <div id="progressbar"></div>
        <p id="expression">7 + 7</p>
        <p id="result">= 14</p>
        <div id="controls">
          <button id="tick"><i class="fa fa-check"></i></button>
          <button id="cross"><i class="fa fa-close"></i></button>
        </div>
        
      </div> <!-- end of working screen -->
        
    </div>
     <div id="score">
          <p>Score: </p>
        </div>
  </div> <!-- end of fluid container -->

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
