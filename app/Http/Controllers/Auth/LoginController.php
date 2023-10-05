<?php

namespace App\Http\Controllers\Auth;

use App\Http\HttpCodes;
use Illuminate\Http\Request;
use App\Http\ResponseHandler;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginCreateUserRequest;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return ResponseHandler::json($request->all(), 200);
    }

    public function create(LoginCreateUserRequest $request)
    {
    }
}
