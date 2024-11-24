<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Tag;
use App\Models\Employer;

class EmployerController extends Controller
{
    public function companies()
    {
        $employers = Employer::with('jobs')->latest()->get()->unique('id')->map(function ($employer){
            return [
                'name' => $employer->name,
                'url' => $employer->jobs->first()->url ?? null,
                'logo' => $employer->logo,
            ];
        });
        return view('nav.companies', compact('employers'));
    }
}
