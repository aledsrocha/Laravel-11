<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
        public function index(){

            //passar sempre o array
            $user = User::first();
            return view('admin.users.index', [
                'user' => $user
            ]);

        }
    }
