<?php
/**
 * User: meletisnikolaidis
 * Date: 08-Aug-18
 * Time: 10:28 PM
 */

namespace App\Controllers;
use App\Classes\Mail;

class IndexController extends BaseController
{
    public function show()
    {
        echo "Inside Homepage from controller class";

        $mail = new Mail();

        $datas = [
            'to' => 'melnikolaidis86@gmail.com',
            'subject' => 'Welcome to Acme Store',
            'view' => 'welcome',
            'name' => 'John Doe',
            'body' => 'Testing email template'
        ];

        if($mail->send($data)){
            echo "Email send successfully";
        } else {
            echo "Email sending failed";
        }
    }
}