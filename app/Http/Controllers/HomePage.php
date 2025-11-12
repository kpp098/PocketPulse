<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteSetting;

class HomePage extends Controller
{
    public function index()
    {
        $site_setting = SiteSetting::all();

        return view('livewire.homepage', compact('site_setting'));
    }
}
