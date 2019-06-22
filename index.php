<?php
include_once 'connection.php' ;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Badminton 2019</title>
    <!-- <link rel="stylesheet" href="css" class="rel">
    <link rel="stylesheet" href="js" class="rel"> -->
    <style>
    .btn-success
    {
      width:72px;
    }
    .col-xs-1
    {
      font-weight:bold;
      color:darkblue;
    }
    </style>
  </head>
  <body>
   
    
    <!-- bootstrap header start -->
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#">Scores <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="index.php">court 1</a>
          <a class="nav-item nav-link" href="#">court 2 </a>
          <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
      </div>
    </nav>

    <div class="container">
    <p>
    <div class="jumbotron">
      <h1 class="display-4" style="text-align:center; font-weight:bold; color:darkblue;">Players</h1>
      <p class="lead" style="text-align:center;">Team selection tournament 2019.</p>
      <hr class="my-4">
      <p>
      <fieldset>
      <legend>court1 :</legend>
      <!-- form starts -->
     
      <form class="form-inline" action="index.php" method="post">
          <div class="form-group mb-2">
            <label for="player1" class="sr-only">Player 1 : </label>
            <input type="text" readonly class="form-control-plaintext" id="player1" value="Player 1 :" style="color:green; font-weight:bold; " >
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <label for="inputPlayer1name" class="sr-only"></label>
            <input type="text" class="form-control" id="player1_name" placeholder="Player 1 " name="player1_name"> <!-- input box 1 name-->
          </div>
          <div class="form-group mb-2">
            <label for="player1" class="sr-only">Player 2 : </label>
            <input type="text" readonly class="form-control-plaintext" id="player2" value="Player 2 :" style="color:green; font-weight:bold; ">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <label  class="sr-only"></label>
            <input type="text" class="form-control" id="playe2_name" placeholder="Player 2 " name="player2_name">  <!-- input box 2 name-->
          </div><p>
          <div style="float:center; padding-left:45%;">
          <button type="submit" class="btn btn-primary mb-2" name="confirmPlayers" >start match</button>
          </div>
        
          
      </form>
          
      <?php
      if(isset($_POST['confirmPlayers']))
      {
        if(isset($_POST['player1_name']) && isset($_POST['player2_name']))
        {
          $sqlPlayer1 = "INSERT INTO court1Player1(player1name) VALUES ('".$_POST["player1_name"]."')";
          $sqlPlayer2 = "INSERT INTO court1Player2(player2name) VALUES ('".$_POST["player2_name"]."')";
          $player1name=$_POST['player1_name'];
          $player2name=$_POST['player2_name'];
          mysqli_query($connection,$sqlPlayer1);
          mysqli_query($connection,$sqlPlayer2);
          
          // update view score with db data
          // $connDB = mysqli_select_db($conneciton,'badminton 2019');
          // sqlview1 ='SELECT score FROM court1Player1';
          // sqlview2 ='SELECT score FROM court1Player2';
          $result = mysqli_query($connection,'SELECT score FROM court1Player1');
          while($row=mysqli_fetch_array($result))
          {
            echo $row['score'];
          }
          mysqli_close($connection);
        }
      }
      ?>
      </fieldset>
      <!-- </p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
      <hr class="my-4">  <!--horizontal line -->
      <!-- view scores  -->
       
      <div class="row justify-content-md-center">
        <div class="col col-lg-2">
          <div class="col-xs-1">
                <label for="ex1">Player 1 scores :</label>
                <label for="score1" id="player1score">00</label>
                <!-- <input class="form-control" id="ex1" type="text" readonly> -->
          </div>
        </div>
        <!-- <div class="col-md-auto">
          Variable width content
        </div> -->
        <div class="col col-lg-2">
              <div class="col-xs-1">
                <label for="ex1">Player 2 scores :</label>
                <label for="score2" id="player2score">00</label>
                <!-- <input class="form-control" id="ex2" type="text" readonly> -->
              </div>
        </div>
      </div><!--  score ends -->
      <p>
          <p>
      <div class="row justify-content-md-center"> <!-- + and - buttons for changing scores-->
      
        <div class="col col-lg-2">
          <div class="col-xs-1"> 
          <!-- should include buttons + and - -->
               
          <button type="button" class="btn btn-success" onclick="addingScores()"><strong> + </strong></button>
          <button type="button" class="btn btn-success"><strong> - </strong></button>
          </div>
        </div>
        
        <div class="col col-lg-2">
              <div class="col-xs-1">
              <button type="button" class="btn btn-success" onclick="addingScores()"><strong> + </strong></button>
              <button type="button" class="btn btn-success"><strong> - </strong></button>
              </div>
        </div>


      </div>
  
     
    </div><!-- jumbortan ends -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script type="script/text">
      function addingScores()
      { 
        var scores=document.getElementById("player1score").innerHTML;
        document.getElementById("player1score").innerHTML=scores+1;
      }
 
 </script>

 <!-- won by -->
 <form action="index.php" method="POST">
    <div class="alert alert-dark" role="alert">
      
        <div class="container" style="padding-left:35%;">
            <div class="form-group" style="color:blue; font-weight:bold;">
              <label for="winnername" >won by :</label>
              <input type="text" class="form-control" id="winner" style="width:300px;">
            </div>
            <button type="submit" class="btn btn-outline-secondary">confirm</button>
        </div>
    </div>
 
 </form>
 
 
  </body>

 
</html>