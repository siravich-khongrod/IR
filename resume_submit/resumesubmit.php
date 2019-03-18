<?php 

define( '_JEXEC', 1 );
define('JPATH_BASE', dirname(__FILE__));
define( 'DS', DIRECTORY_SEPARATOR );

require_once ( JPATH_BASE .DS.'includes'.DS.'defines.php' );
require_once ( JPATH_BASE .DS.'includes'.DS.'framework.php' );

$db = JFactory::getDbo();

$jobapp_first_name	 = $_POST['jobapp_first_name'];
$jobapp_middle_name	 = $_POST['jobapp_middle_name'];
$jobapp_last_name	 = $_POST['jobapp_last_name'];
$jobapp_email	 = $_POST['jobapp_email'];
$jobapp_phone_number	 = $_POST['jobapp_phone_number'];
$applicant_resume	 = $_POST['applicant_resume'];
$jobapp_recruit = $_POST['jobapp_recruit'];

$jobapp_skill = $_POST['jobapp_skill'];
$jobapp_jd = $_POST['jobapp_jd'];
$jobapp_jd_links = $_POST['jobapp_jd_links'];

$target_file = $_POST['vhphoto'];
$target_file_name = $_POST['filename'];

$target_dir = "uploads/";
$target_file = $target_dir . $target_file_name;
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

$jobapp = new stdClass();
$jobapp->fname = $jobapp_first_name;
$jobapp->mname = $jobapp_middle_name;
$jobapp->lname = $jobapp_last_name;
$jobapp->email = $jobapp_email;
$jobapp->phone = $jobapp_phone_number;
$jobapp->resume_loc = $target_file_name;
$jobapp->recruit = (int)$jobapp_recruit;

$jobapp->skills = $jobapp_skill;
$jobapp->jd = $jobapp_jd;
$jobapp->jd_links = $jobapp_jd_links;

$result = JFactory::getDbo()->insertObject('#__class_resume', $jobapp);


header( "location: https://siravich-khongrod.github.io/" );
?>