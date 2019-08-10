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
function display_view_score()
{
    document.getElementById("viewScores").style.display = "block";  //starting the match
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
    else if(player2 >player1 && player1>20 && Math.abs(player1-player2)==2)
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


