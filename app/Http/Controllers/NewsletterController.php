<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {

        // @todo Complete functionality

        $this->validate($request, [
            'email'  => 'email'
        ]);

        $email = $request->input('email');
        return response()->json($email);

    }
}
