<?php session_start(); ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title><?php echo basename(dirname(__FILE__)) . ' > ' . basename(__FILE__, '.php'); ?></title>
    </head>
    <body><?php
        $link = dirname(dirname($_SERVER['SCRIPT_NAME']));
        echo "<a href='".$link."'>".basename($link)."</a> &gt; ";
        $link = dirname($_SERVER['SCRIPT_NAME']);
        echo "<a href='".$link."'>".basename($link)."</a> &gt; ".basename($_SERVER['SCRIPT_NAME'])."<br/>\n";
        
        include_once('../config.inc.php'); //KCONFIG is defined in here.
        require_once('../../Klarna.php'); //relative from test/

        $config = new KlarnaConfig(KCONFIG);

        $klarna = new Klarna();
        $klarna->setConfig($config);

        include_once('../ko.inc.php');

        if(isset($_GET['rno']) && isset($_GET['amount'])) {
            try {
                if(($result = $klarna->changeReservation($_GET['rno'], intval($_GET['amount']))) === true) {
                    echo "Reservation ".$_GET['rno']." changed amount to $_GET[amount].<br />";
                }
                else {
                    //It never gets here? Cause it throws an exception instead?
                    echo "Reservation ".$_GET['rno']." couldn't be removed.<br />";
                }

            }
            catch(Exception $e) {
                echo $e->getMessage() . " (" . $e->getCode() . ")";
            }
        }
        else {
            echo "First create a reservation <a href='reserve_amount.php'>here</a><br />";
        }

        ?></body>
</html>