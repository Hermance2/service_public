<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendMail(){
        $toEmail = 'ahandefasana@gmail.com';
        $message = 'votre demande est encours';
        $subject = 'Votre transaction est encore de traitement  vous avez retour dans quelque minute';  

        $response = Mail::to($toEmail)->send(new testMail($message,$subject)) ;      
        
        dd($response);
    }
}
