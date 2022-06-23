<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail; 
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Validator;

class ContactMessageController extends Controller
{
    public function send( Request $request ){
        $data = $request->all();

        // validazione
        $validator = Validator::make($data, [
            'mail' => 'required|mail',
            'message' => 'required'
        ],
        [
            'email.required' => 'La mail è obligatoria',
            'email.email' => 'sintassi errata',
            'message.required' => 'il messaggio è obbligatorio'
        ]

    );

        if( $validator->fails() ) {
            return response()->json([ 'errors' => $validator->errors() ] );
        };

        // genero nuova istanza
        $mail = new ContactMail($data);
        Mail::to( env('MAIL_ADMIN') )->send($mail);

        // return response()->json($data);
        return response( 'Mail sent', 204 );
    }
}
