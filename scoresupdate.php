<?php 
include_once('connection.php');

// player one scores changes
if(isset($_POST['player1plus_scores']))
{
$query = "SELECT first_set_player1 FROM matchs WHERE player1_first_name = {$_POST['player1_name']}";
$resultQuery = mysqli_query($connection,$query);
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