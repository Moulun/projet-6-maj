<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="jours">
    <form method="post" action="" >
        <input type="submit" name="lundi" value="lundi" >
        <input type="submit" name="mardi" value="mardi" >
        <input type="submit" name="mercredi" value="mercredi" >
        <input type="submit" name="jeudi" value="jeudi" >
        <input type="submit" name="vendredi" value="vendredi" >
        <input type="submit" name="samedi" value="samedi" >
        <input type="submit" name="dimanche" value="dimanche" >
    </form>
</section>

<div class="img1">
<?php
if(isset($_POST['lundi'])){
  echo '12°' .'18°' . '15°' . '14°'.'12°';
}
if(isset($_POST['mardi'])){
    echo '13°' .'20°'. '15°' . '14°' .'15°';
}
if(isset($_POST['mercredi'])){
     echo '15°' .'21°' .'16°' .'14°'. '15°';
    }
if(isset($_POST['jeudi'])){
     echo '14°' .'19°' .'17°' .'13°' .'15°';
 }
 if(isset($_POST['vendredi'])){
     echo '12°' .'18°' .'18°' .'12°' .'16°';
 }
 if(isset($_POST['samedi'])){
    echo '10°' .'20°' .'16°' .'9°' .'15°';
 }
 if(isset($_POST['dimanche'])){
     echo '14°' .'22°' .'15°' .'10°' .'17°';
 }




?>

</div>



</body>
</html>