<?php
$title = 'Exercice5';
$gender = 'Femme';
?>
<? include 'header.php';?>
<?php
if ($gender = 'Femme'){
    echo 'C\'est une développeuse !!!';
}
else if ($gender = 'Homme')
{
    echo 'C\'est un développeur !!!';
}

?>
<?include 'footer.php';?>