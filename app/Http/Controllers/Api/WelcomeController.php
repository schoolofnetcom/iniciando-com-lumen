<?php
/**
 * Created by Erik.
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        $name = 'Erik';
        return view('welcome', ['n'=>$name]);
    }
}