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
    <script src="scripts.js"></script>
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
      <h1 class="display-4" style="text-align:center; font-weight:bold; color:darkblue;">BADMINTON</h1>
      <p class="lead" style="text-align:center;">Team selection tournament 2019</p>
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
          <button type="submit" class="btn btn-primary mb-2" name="Players"  >start match</button>
          </div>
        
          
      </form>
          
      <?php
      $player1name="";
      $player2name="";
      if(isset($_POST['Players']))
      {
        // if(isset($_POST['player1_name']) && isset($_POST['player2_name']) && isset($_POST['player1scores']) && isset($_POST['player2scores']))
        // {
          $player1name=$_POST['player1_name'];
          $player2name=$_POST['player2_name'];
          
          $sql= "INSERT INTO matchs (player1_first_name,player2_first_name) VALUES ('$player1name','$player2name')";
          // $sqlPlayer2 = "INSERT INTO matchs(player2_first_name) VALUES ('".$_POST["player2_name"]."')";
          
          $result=mysqli_query($connection,$sql);
          if($result)
          {
            echo "<div style='text-align:center; font-weight:bold;'>names are added , match starts now ! <h3>" . $player1name . "</h3> vs <h3>" . $player2name . "</h3> </div>";
          }
          // mysqli_query($connection,$sqlPlayer2);
          
          // update view score with db data
          // $connDB = mysqli_select_db($conneciton,'badminton scoreboard');
          // sqlview1 ='SELECT score FROM court1Player1';
          // sqlview2 ='SELECT score FROM court1Player2';
          // $result = mysqli_query($connection,'SELECT score FROM court1Player1');
          // while($row=mysqli_fetch_array($result))
          // {
          //   echo $row['score'];
          // }
          
        // }
      }
      ?>
      </fieldset>
      <!-- </p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
      <hr class="my-4">  <!--horizontal line -->

      <!-- view scores\\  match starting section -->
      
      <div class="row justify-content-md-center" id="viewScores">
        <div class="col col-lg-2">
          <div class="col-xs-1">
                <label for="ex1">Player 1 scores :</label>
                <label for="score1" id="player1score" name="player1scores">00</label>
                <!-- <input class="form-control" id="ex1" type="text" readonly> -->
          </div>
        </div>
        <!-- <div class="col-md-auto">
          Variable width content
        </div> -->
        <div class="col col-lg-2">
              <div class="col-xs-1">
                <label for="ex1">Player 2 scores :</label>
                <label for="score2" id="player2score" name="player2scores">00</label>
                <!-- <input class="form-control" id="ex2" type="text" readonly> -->
              </div>
        </div>
        <!-- getting js variable into a php variable and send that value to the database -->
        <!-- <script>
          function getValue(){
              var value = document.getElementById('player1score').innerHTML;
            }
        </script> -->
      

      </div><!--  score ends -->
      <p>
          <p>
      <div class="row justify-content-md-center"> <!-- + and - buttons for changing scores-->
      
        <div class="col col-lg-2" id="buttons1set">
          <div class="col-xs-1">
          <!-- should include buttons + and - -->
          <form action="#" method="post">
            <button name="playerOnePlus" type="button" class="btn btn-success" onclick="addingScores1(); scoresValidation();"><strong> + </strong></button>
            <button name="playerTwoPlus" type="button" class="btn btn-success" onclick="subScores1();"><strong> - </strong></button>
          </form>
          </div>
        </div>

        
      <!-- match end -->
      
        <div class="col col-lg-2" id="buttons2set">
              <div class="col-xs-1">
              <button type="button" class="btn btn-success" onclick="addingScores2();" ><strong> + </strong></button>
              <button type="button" class="btn btn-success" onclick ="subScores2();"><strong> - </strong></button>
              </div>
        </div>
        
<!-- end match -->

      </div>
      
      <p>
        <div style="float:center; padding-left:45%;">
        <form action="#" method="POST">
        
          <button type="submit" class="btn btn-primary mb-2" name="confirmPlayers" onclick="winner();">end match</button>
          </form></div>

  
     
    </div><!-- jumbortan ends -->
    <?php
        function setValueIntoPHPvariable()
        {
          $player1finalScore = "<script>
          function getValue(){
              var value = document.getElementById('player1score').innerHTML;
            }
        </script>";

          echo $player1finalScore;
        }
         
           
          
         
          //$player2finalScore = 
          // "
          //   <script>
          //   document.getElementById('player2score').innerHTML;
          // "
          // $player1name=$_POST['player1_name'];
          // $player2name=$_POST['player2_name'];
          
          //now player1finalScore variable and player2finalScore variable are to send to the database 
          //if(isset($_POST['confirmPlayers']))
          // {
            // if($player1finalScore>$player2finalScore)
            // {
            //   $updateDBWinner = "INSERT INTO matches(wonBY) VALUES ('$player1name')";
            //   echo "player 1 won";
            // }
            // else
            // {
            //   $updateDBWinner = "INSERT INTO matches(wonBY) VALUES ('$player2name')";
            //   echo "player 2 won";
            // }
            //$dbUpdateFinalScoreQuery = "INSERT INTO "
          // }
          //if is end

        ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script type="script/text">
 
     
 </script>

 <!-- won by -->
 <form action="index.php" method="POST">
    <div class="alert alert-dark" role="alert">
      
        <div class="container" style="padding-left:35%;">
            <div class="form-group" style="color:blue; font-weight:bold;">
              <label for="winnername" >won by :</label>
              <input type="text" class="form-control" id="winner" style="width:300px;" name ="winnerOutput" readonly>
            </div>
            <button type="submit" class="btn btn-outline-secondary" name="confirm">confirm</button>
        </div>
    </div>
 
 </form>
 <?php
  if(isset($_POST['confirm']))
  {
    $winner =$_POST['winnerOutput'];
    $sql_update="INSERT INTO matchs(wonBy) VALUES('$winner')";
    $winning_result =sqli_query($conneciton,$sql_update);
    if($winning_result)
    {
      echo "updated database winner";
    }
  }
 ?>
 
  </body>

 
</html>
<?php mysqli_close($connection); ?>