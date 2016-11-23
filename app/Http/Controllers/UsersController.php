<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class UsersController extends Controller
{
   public function index()
   {
        $users = [
            '0' => [
                'first_name' => 'Alvie',
                'last_name' => 'Amar',
                'location' => 'Cebu',
            ],
            '1' => [
                'first_name' => 'Aisle',
                'last_name' => 'Bee',
                'location' => 'Manila',
            ],
        ];
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
