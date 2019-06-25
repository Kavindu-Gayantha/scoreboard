function addingScores1()
{ 
  var scores=document.getElementById("player1score").innerHTML;
  scores = scores + 1;
  document.getElementById("player1score").innerHTML=scores;
}

function display_view_score()
{
    document.getElementById("viewScores").style.display = "block";
}
