 <?php
 include ('../classes/autoload.php');
 $data= new model();
//  param
$naem='SAT';
$emal='SAT@gamil.cpm';
$number='0918';
$pas='123';
print_r( $data->create($naem,$emal,$number,$pas));