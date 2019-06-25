function addingScores1()
{ 
  var scores1=document.getElementById("player1score").innerHTML;
  scores1 = parseInt(scores1,10)+ 1;  //string to integer conversion
  document.getElementById("player1score").innerHTML=scores1;
}

function display_view_score()
{
    document.getElementById("viewScores").style.display = "block";
}

function addingScores2()
{
    var scores2=document.getElementById("player2score").innerHTML;
    scores2 = parseInt(scores2,10)+ 1;  //string to integer conversion
    document.getElementById("player2score").innerHTML=scores2;
}
