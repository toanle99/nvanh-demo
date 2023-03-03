<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function list(){
        $users = User::paginate(User::LIMIT);
        return view('admin.list')->with('users', $users);
    }
}
