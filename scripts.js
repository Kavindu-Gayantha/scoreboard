function addingScores1()
{ 
  var scores=document.getElementById("player1score").innerHTML;
  scores = parseInt(scores,10)+ 1;  //string to integer conversion
  document.getElementById("player1score").innerHTML=scores;
}

function display_view_score()
{
    document.getElementById("viewScores").style.display = "block";
}
