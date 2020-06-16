<?php
session_start();
require '../vendor/autoload.php';


require 'connect_Db.php';
            if (array_key_exists('del', $_POST)) {
$sql = 'DELETE FROM purchase
 WHERE number_application='.$_POST['number_app'].';';
        $result = $dbconn->prepare($sql);
        $result->execute();

 $sql ='DELETE FROM application 
 WHERE number_application='.$_POST['number_app'].';';
        $result = $dbconn->prepare($sql);
        $result->execute();
Header("Location: ../public/application.php");
            }
  if (array_key_exists('send', $_POST)) {
$phpWord = new  \PhpOffice\PhpWord\PhpWord();
$phpWord->setDefaultFontName('Times New Roman');
$phpWord->setDefaultFontSize(14);
$properties = $phpWord->getDocInfo();
$properties->setCreator('Name');
$properties->setCompany('Company');
$properties->setTitle('Title');
$properties->setDescription('Description');
$properties->setCategory('My category');
$properties->setLastModifiedBy('My name');
$properties->setCreated(mktime(0, 0, 0, 3, 12, 2015));
$properties->setModified(mktime(0, 0, 0, 3, 14, 2015));
$properties->setSubject('My subject');
$properties->setKeywords('my, key, word');


$sectionStyle = array(
 
 'orientation' => 'landscape',
 'marginTop' => \PhpOffice\PhpWord\Shared\Converter::pixelToTwip(10),
 'marginLeft' => 600,
 'marginRight' => 600,
 'colsNum' => 1,
 'pageNumberingStart' => 1,
 'borderBottomSize'=>100,
 'borderBottomColor'=>'C0C0C0'
 
 );
require 'countPurchaseMethod.php';
$section = $phpWord->addSection($sectionStyle); 

$text = 'Заявка номер:'.$_POST['number_app'].'   Поставщик: '.$_POST['provider'].'   Дата заявки: '.$_POST['remains'].'   Станция: '.$_SESSION['station'].';';
$section->addText(htmlspecialchars($text), $fontStyle,$parStyle);
foreach ($massPur as $pur) { 
    $text = 'Сумма заказа:'.$pur[1].'   Количество литров: '.$pur[2].'   Наименование топлива: '.$pur[5].';';
    $section->addText(htmlspecialchars($text), $fontStyle,$parStyle);
 } 

$fontStyle = array('name'=>'Times New Roman', 'size'=>14, 'color'=>'075776', 'bold'=>TRUE, 'italic'=>TRUE);
$parStyle = array('align'=>'left','spaceBefore'=>10);

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord,'Word2007');
$objWriter->save('file/application.docx');
Header("Location: ../public/application.php");
  }