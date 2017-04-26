

<?php 

//$ns = $_REQUEST['ns'];
//$mn = $_REQUEST['mn'];
//$cn = $_REQUEST['cn'];
 $ns = 'varun';
 $mn = 'sample';
 $cn = 'index';
$Cns = ucwords($ns);
$Cmn = ucwords($mn);
$Ccn = ucwords($cn);

function filewrite($helper , $data){

$handle = fopen($helper, 'w');
fwrite($handle, $data);
fclose($handle);
}

$base ='F:/xampp/htdocs/magento/app/code/local/';

mkdir($base.$Cns,0777);
mkdir($module=$base.$Cns.'/'.$Cmn,0777);
mkdir($block=$base.$Cns.'/'.$Cmn.'/block',0777);
mkdir($controller=$base.$Cns.'/'.$Cmn.'/controllers',0777);
mkdir($etc=$base.$Cns.'/'.$Cmn.'/etc',0777);
mkdir($helper=$base.$Cns.'/'.$Cmn.'/helper',0777);
mkdir($model=$base.$Cns.'/'.$Cmn.'/model',0777);
mkdir($sql=$base.$Cns.'/'.$Cmn.'/sql',0777);


$data = '<?php 
class '.$Cns.'_'.$Cmn.'_Helper_Data extends Mage_Core_Helper_Abstract
{

}
?>';
$helperp = $helper.'/Data.php';
filewrite($helperp,$data);



$inid = '<?xml version="1.0"?>
<config>
    <modules>
        <'.$Cns.'_'.$Cmn.'>
            <active>true</active>
            <codePool>local</codePool>
        </'.$Cns.'_'.$Cmn.'>
    </modules>
</config>';

$inip = $module.'/'.$Cns.'_'.$Cmn.'.xml';
filewrite($inip,$inid);

$control = '<?php
class '.$Cns.'_'.$Cmn.'_'.$Ccn.'Controller extends Mage_Core_Controller_Front_Action 
{        
    public function indexAction() 
    {
        echo "crazy falcon";
        //$this->loadLayout();
        //$this->renderLayout();
    }

}
?>';
$controlp = $controller.'/'.$Ccn.'Controller.php';
filewrite($controlp,$control);


$config = '<?xml version="1.0"?>
<config> 
    <modules>
        <'.$ns.'_'.$mn.'>
            <version>0.1.1</version>
        </'.$ns.'_'.$mn.'>
    </modules>
     
    <frontend>
        <routers>
            <'.$mn.'>
                <use>standard</use>
                <args>
                    <module>'.$Cns.'_'.$Cmn.'</module>
                    <frontName>'.$mn.'</frontName>
                </args>
            </'.$mn.'>
        </routers>
       
    </frontend>
</config>';

$configp = $etc.'/config.xml';

filewrite($configp,$config);

?>
