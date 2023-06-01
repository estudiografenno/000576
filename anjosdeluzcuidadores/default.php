<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>


<?php 
$view->inc('elements/header.php');
?>


<?php 
$view->inc('elements/header_top.php');
?>


<?php
    $a = new Area('Home');
    $a->display($c);
?>


<?php
    $a = new Area('About');
    $a->display($c);
?>


<?php
    $a = new Area('Team');
    $a->display($c);
?>


<?php
    $a = new Area('News');
    $a->display($c);
?>


<?php
    $a = new Area('Appointment');
    $a->display($c);
?>


<?php
    $a = new Area('GoogleMpas');
    $a->display($c);
?>       


<?php
$view->inc('elements/footer.php');
?>