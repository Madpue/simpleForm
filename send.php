<?php
/* Save data from form in index.php
* get vars from form
*
*/

$form_vars=array();

$form_vars['first_name'] = (isset($_POST['first_name']))?$_POST['first_name']:'';
$form_vars['last_name'] = (isset($_POST['last_name']))?$_POST['last_name']:'';
$form_vars['birth_date'] = (isset($_POST['birth_date']))?$_POST['birth_date']:'';
$form_vars['email'] = (isset($_POST['email']))?$_POST['email']:'';
$form_vars['gender'] = (isset($_POST['gender']))?$_POST['gender']:'';
$form_vars['hobbies'] = '';
foreach ($_POST['hobbies'] as $key => $value){
	$form_vars['hobbies'] = $_POST['hobbies'];
}
$form_vars['password'] = (isset($_POST['password']))?$_POST['password']:'';
$form_vars['passwordrepeat'] = (isset($_POST['passwordrepeat']))?$_POST['passwordrepeat']:'';

$form_vars['country'] = (isset($_POST['country']))?$_POST['country']:'';

foreach ($_POST['car'] as  $value){
        $form_vars['car'][] = $value;
}

$form_vars['upload'] = (isset($_POST['upload']))?$_POST['upload']:'';
$form_vars['comments'] = (isset($_POST['comments']))?$_POST['comments']:'';
echo '<pre>';
print_r ($form_vars);
echo '</pre>';
