<?php

namespace App\Http\Controllers;
use Mail;

use Illuminate\Http\Request;

class contactoController extends Controller
{
    function crear(){
        //return "Mensaje envíado, pronto nos pondremos en contacto";
            
        $data = array('name'=>"Our Code World");
        // Ruta o nombre de la plantilla de hoja que se va a representar
        $template_path = 'email_template';
        
        Mail::send(['text'=> $template_path ], $data, function($message) {
                    // Configure el destinatario y el asunto del correo.
                    $message->to('ingmiguelmora@hotmail.com', 'Miguel Mora')->subject('Laravel First Mail');
                    $message->from('contacto@sportspot.com.co','Contacto SportSpot');
                });        
        return "Correo electrónico enviado, revise su bandeja de entrada.";

    }

    function capturarLead(){
        return "Pronto nos pondremos en contacto";
    }

}
