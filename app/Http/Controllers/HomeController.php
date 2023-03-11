<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function Home() {
        return view('cimmino\home');
    }
    public function Flow() {
        return view('flow\flowhome');
    }
    public function Travel() {
        return view('travel\begin');
    }
    public function Pricing() {
        return view('travel\end');
    }
    public function Art() {
        return view('art\art');
    }

}
