<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
        if (View::exists('pages.index')) {
            $data = [
                'name' => 'aislebee',
                'location' => 'kalasangan',
            ];

            return view('pages.index', compact('data'));
        } else {
            return 'view not available';
        }
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function settings()
    {
        return view('pages.settings');
    }
}
