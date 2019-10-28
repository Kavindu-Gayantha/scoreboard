function addingScores1()
{ 
  var scores1=document.getElementById("player1score").innerHTML;
  scores1 = parseInt(scores1,10)+ 1;  //string to integer conversion
  document.getElementById("player1score").innerHTML=scores1;
}
function subScores1()
{
    var scores1 = document.getElementById("player1score").innerHTML;
    scores1 = parseInt(scores1,10)-1; //string to integer conversion
    document.getElementById("player1score").innerHTML = scores1; // validation should be added if minus scores may display
}
function subScores2()
{
    var scores2 = document.getElementById("player2score").innerHTML;
    scores2 = parseInt(scores2,10) - 1; //string to integer conversion
    document.getElementById("player2score").innerHTML = scores2;
}


function addingScores2()
{
    var scores2=document.getElementById("player2score").innerHTML;
    scores2 = parseInt(scores2,10)+ 1;  //string to integer conversion
    document.getElementById("player2score").innerHTML=scores2;
}
function scoresValidation()
{
    var scores1,scores2;
    if(scores1 >20 || scores2>20) //21-19 like
    {
        if(Math.abs(scores1-scores2)==2)
        {
            document.getElementById("viewScores").style.display ="none"; // to stop counting further

            if(scores1>scores2) // checking who wons
            {
                document.getElementById("winner").innerHTML="player 1 won";
                console.log("player 1 won");
            }
            else
            {
                document.getElementById("winner").innerHTML ="player 2 won";
            }
            
        }
    }

}
//selecting who won
function winner()
{
    var player1 = document.getElementById("player1score").innerHTML;
    var player2 = document.getElementById("player2score").innerHTML;
    if(player1> player2 && player1>20 && Math.abs(player1-player2)==2)
    {
        document.getElementById("winner").innerTextL=player1;
        document.getElementById("buttons2set").style.display ="none";
        document.getElementById("buttons1set").style.display ="none";
    }
    else if(player2 >player1 && player2>20 && Math.abs(player1-player2)==2)
    {
        document.getElementById("winner").innerText = player2;
        document.getElementById("buttons2set").style.display ="none";
        document.getElementById("buttons1set").style.display ="none";
    }
    else
    {
        document.getElementById("winner").innerHTML ="check for errors";
    }
}



function visibleScores()
{
    var x = document.getElementById('scoreVisibleArea');
    x.innerHTML =
    `
    <div class="row justify-content-md-center" id="viewScores">
        <div class="col col-lg-2">
          <div class="col-xs-1">
                <label for="ex1">Player 1 scores :</label>
                <label for="score1" id="player1score" name="player1scores"><?php     ?></label>
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
          function getValue
              var value = document.getElementById('player1score').innerHTML;
            
        </script> -->
      

      </div><!--  score ends -->
      
      <p>
          <p>
      <div class="row justify-content-md-center"> <!-- + and - buttons for changing scores-->
  
        <div class="col col-lg-2" id="buttons1set">
          <div class="col-xs-1">
          <!-- should include buttons + and - -->
          <form action="scoresupdate.php" method="post">
            <button name="player1plus_scores" type="button" class="btn btn-success" onclick="addingScores1(); scoresValidation();"><strong> + </strong></button>
            <button name="player1minus_scores" type="button" class="btn btn-success" onclick="subScores1();"><strong> - </strong></button>
          </form>
          </div>
      </div>

        
      <!-- match end -->
      
        <div class="col col-lg-2" id="buttons2set">
              <div class="col-xs-1">
              <form action="scoresupdate.php" method="post">
              <button name="player2plus_scores" type="button" class="btn btn-success" onclick="addingScores2();" ><strong> + </strong></button>
              <button name="player2minus_scores" type="button" class="btn btn-success" onclick ="subScores2();"><strong> - </strong></button>
              </form>
              </div>
        </div>
        
        
<!-- end match -->

      </div>
    `;
}