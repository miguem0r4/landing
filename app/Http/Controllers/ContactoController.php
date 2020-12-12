<?php

namespace App\Http\Controllers;

#use App\Contacto;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Contacto;
use Mail;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = request()->all();
        
        Contacto::create([
            "nombre" => $data['name'],
            "correo" => $data['email'],
            "mensaje" => $data['message'],
        ]);

        $data['title'] = "Nuevo contacto recibido";
        $subject = $data['title'];
        $data["body"]  = "";
        $data["body"] .= "Nombre : ".$data['name']."\n";
        $data["body"] .= "Email : ".$data['email']."\n";
        $data["body"] .= "Mensaje : ".$data['message']."\n";

        // Ruta o nombre de la plantilla de hoja que se va a representar
        $template_path = 'email_template';        
        if (App::environment('local')){
        Mail::send(['html'=> $template_path ], $data, function($message) {
                    // Configure el destinatario y el asunto del correo.
                    $message->to('ingmiguelmora@hotmail.com', 'Miguel Mora')->subject("Nuevo contacto recibido");
                    $message->from('contacto@sportspot.com.co','Contacto SportSpot');
                });
        }                

        return "Mensaje envíado, pronto nos pondremos en contacto";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}
