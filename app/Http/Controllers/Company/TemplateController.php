<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Survey;

class TemplateController extends Controller
{
    public function index()
    {
        $templates = Survey::template()->get();

        $user = Auth::user();

        $surveys = Survey::owned()->get();

        return view('company.templates.index', compact('templates','user','surveys'));
    }
}

