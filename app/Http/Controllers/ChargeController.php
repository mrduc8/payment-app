<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChargeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('charge.index');
    }
}
