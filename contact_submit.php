<?php

if($_POST){
    $data = $_POST;
    if($data['usr_name'] != '' && $data['usr_email'] != '' && $data['usr_phone'] != '' && $data['usr_subject'] != '' && $data['usr_message'] != ''){
        $to = 'info@siasmtech.com';
        $subject = 'NEW LEAD';
        $headers = "From: 'Sia Smtech Solutions<info@siasmtech.com>'\r\n";
        $headers .= "Reply-To: noreply@siasmtech.com\r\n";
        $headers .= "CC: pm.siasmtech@gmail.com\r\n";
        $headers .= "CC: siasmtech@gmail.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $headers .= "X-Priority: 1\r\n"; 
        $headers .= "\r\n";
        $ip = getUserIP();
        $message = '<table style="width:700px;">
                    <tr>
                        <td colspan="3">Hello, Sia Smtech Solutions</td>
                    </tr>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="3">New enquiry has been made on our website. Below are the details of the enquiry done :</td>
                    </tr>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Name</td><td>:</td><td>'.$data['usr_name'].'</td>
                    </tr>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Email Id</td><td>:</td><td>'.$data['usr_email'].'</td>
                    </tr>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">Contact No.</td><td>:</td><td>'.$data['usr_phone'].'</td>
                    </tr>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Subject</td><td>:</td><td>'.$data['usr_subject'].'</td>
                    </tr>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Message</td><td>:</td><td>'.$data['usr_message'].'</td>
                    </tr>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Budget</td><td>:</td><td>'.$data['usr_budget'].'</td>
                    </tr>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Duration</td><td>:</td><td>'.$data['usr_duration'].'</td>
                    </tr>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Packages</td><td>:</td><td>'.$data['usr_packages'].'</td>
                    </tr>
                    
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>IP Address</td><td>:</td><td>'.$ip.'</td>
                    </tr>
                   </table>';
        mail($to, $subject, $message, $headers);
        echo json_encode(array('err'=>0,'result'=>'Your enquiry has been successfully submitted. We will get back to you soon.'));
    } else {
        echo json_encode(array('err'=>1,'result'=>'Please enter valid data about your enquiry.'));
    }
}


function getUserIP() {
    if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
            $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($addr[0]);
        } else {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}