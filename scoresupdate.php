<?php 
include_once('connection.php');

// player one scores changes
if(isset($_POST['player1plus_scores']))
{
    $updatequery = "UPDATE matchs SET first_set_player1 = $player1scores.= +1";
    $selectquery = "SELECT first_set_player1 FROM matchs WHERE player1_first_name = {$_POST['player1_name']} AND player2_first_name= {$_POST['player2_name']}";
    $resultQuery = mysqli_query($connection,$selectquery);
while($results= mysqli_fetch_assoc($resultQuery))
{
    //echo results['first_set_player1'];
}
}
if(isset($_POST['player1minus_scores']))
{

}
// player two scores changes
if(isset($_POST['player2plus_scores']))
{

}
if(isset($_POST['player2minus_scores']))
{

}
?>