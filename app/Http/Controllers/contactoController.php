<?php

namespace App\Http\Controllers;
use Mail;

use Illuminate\Http\Request;

class contactoController extends Controller
{
    function crear(){
        
        $data = request()->all();
        
        $data['title'] = "Nuevo contacto recibido";
        $subject = $data['title'];
        $data["body"]  = "";
        $data["body"] .= "Nombre : ".$data['name']."\n";
        $data["body"] .= "Email : ".$data['email']."\n";
        $data["body"] .= "Mensaje : ".$data['message']."\n";

        // Ruta o nombre de la plantilla de hoja que se va a representar
        $template_path = 'email_template';
        
        Mail::send(['html'=> $template_path ], $data, function($message) {
                    // Configure el destinatario y el asunto del correo.
                    $message->to('ingmiguelmora@hotmail.com', 'Miguel Mora')->subject("Nuevo contacto recibido");
                    $message->from('contacto@sportspot.com.co','Contacto SportSpot');
                });                

        return "Mensaje envíado, pronto nos pondremos en contacto";

    }

    function capturarLead(){

        $data = request()->all();
        
        $data['title'] = "Nuevo lead recibido ".$data['tipo'];        
        $data["body"]  = "";        
        $data["body"] .= "Email : ".$data['email1']."\n";
        $data["body"] .= "Tipo : ".$data['tipo']."\n";

        // Ruta o nombre de la plantilla de hoja que se va a representar
        $template_path = 'email_template';
        if (App::environment('local')){
        Mail::send(['html'=> $template_path ], $data , function($message) {
                    // Configure el destinatario y el asunto del correo.
                    $message->to('ingmiguelmora@hotmail.com', 'Miguel Mora')->subject("Nuevo Lead recibido");
                    $message->from('contacto@sportspot.com.co','Contacto SportSpot');
                });                
        }
        return "Pronto nos pondremos en contacto";
    }

}
