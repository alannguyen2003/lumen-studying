<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->middleware('auth:api', [

            'except' => [
                'register',
                'verify',
                'login',
            ],

        ]);
    }

    public function register(Request $request) {

        /* validation requirement */
        $validator = $this->validation('registration', $request);

        if ($validator->fails()) {

            return $this->core->setResponse('error', $validator->messages()->first(), NULL, false , 400  );
        }

        $input = $request->all();

        $input['password'] = Hash::make($input['password']);
        
        $user = User::create($input);

        return $this->core->setResponse('success', 'Account created successfully!', $user );
    }  
}
