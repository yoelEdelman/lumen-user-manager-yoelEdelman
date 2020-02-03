<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::get();
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function destroy($id)
    {
        $res = new \stdClass();
        if (User::destroy($id)) {
            http_response_code(200);
            $res->message = "deleted with success";
        }
        else {
            http_response_code(400);
            $res->message = "user not found";
        }
        return json_encode($res);
    }
}
