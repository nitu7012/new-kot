<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $project = $_POST['project'] ?? '';
    $fullname = $_POST['fullname'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';

    $to = "harshad.bhosale4378@gmail.com, botmediadigitalmarketing@gmail.com";
    // $to = "rakeshkumar748844@gmail.com";
    $subject = "New Lead Notification - Website";

    $message = "
    <html>
    <head><title>New Lead</title></head>
    <body>
    <h3>Lead Details</h3>
    <table border='1' cellspacing='0' cellpadding='6'>
        <tr><td><strong>Project</strong></td><td>$project</td></tr>
        <tr><td><strong>Name</strong></td><td>$fullname</td></tr>
        <tr><td><strong>Phone</strong></td><td>$phone</td></tr>
        <tr><td><strong>Email</strong></td><td>$email</td></tr>
    </table>
    </body>
    </html>
    ";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <no_reply@jhamtani.com>' . "\r\n";
$headers .= 'Cc: ' . "\r\n";

if(mail($to,$subject,$message,$headers)) //Send an Email. Return true on success or false on error


{
echo 

"<script>window.location.href='thank-you.html';</script>";
}
else
{
echo "<script>
alert('Plz Try Agian');
window.location.href='index.html'

;
</script>";
}
}
?>
