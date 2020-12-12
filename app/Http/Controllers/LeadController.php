<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Models\Lead;
use Illuminate\Http\Request;
use Mail;

class LeadController extends Controller
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
        $data = request()->all();
        
        Lead::create([
            "correo" => $data["email1"],
            "tipo" => $data["tipo"]
        ]);

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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function show(Lead $lead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead)
    {
        //
    }
}
