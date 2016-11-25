<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class UsersController extends Controller
{
   public function index()
   {
        //$users = User::simplePaginate(10); //just arrows no number
        $users = User::paginate(10);

        return view('admin.users.index', compact('users'));
   }

   public function create()
   {
        return view('admin.users.create');
   }

   public function store(Request $request)
   {
        User::create($request->all());
        return 'success';
   }
}
