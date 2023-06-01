<?php
session_start();
include 'MailChimpForm.php';
use \DrewM\MailChimp\MailChimp;

$MailChimp = new MailChimp('f66b95ab9182c2b3bd85a3ce29128c21-us11');
$list_id ='529d452e80';
$apiKey ='f66b95ab9182c2b3bd85a3ce29128c21-us11';
if(isset($_POST['submit'])) {


    if(empty($_POST['email'])){
        $_SESSION['msg'] = '<p style="color: #EA4335">Please enter valid email address.</p>';
    }else{
        $email = $_POST['email'];
        echo $email;
        $result = $MailChimp->post("lists/$list_id/members", [
            'email_address' => $_POST['email'],
            'status'        => 'subscribed',
        ]);
        if ($MailChimp->success()) {
            $_SESSION['msg'] = '<p style="color: #34A853">You have successfully subscribed to Morning Briefing.</p>';
        } else {
            $_SESSION['msg'] = $MailChimp->getLastError();
            if($_SESSION['msg']="400: jeanpaulbai7@gmail.com is already a list member. Use PUT to insert or update list members."){
                $_SESSION['msg'] = '<p style="color: #34A853">You are already subscribed..</p>';
            }

        }
    }

}
header('location:index.php');

?>