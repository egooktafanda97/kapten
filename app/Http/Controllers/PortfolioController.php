<?php

namespace App\Http\Controllers;

use App\Models\Hit;
use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            "project" => Project::all()
        ];
        $hitt = new Hit();
        $hitt->page = "/portfolio/";
        $hitt->ip_address = $request->ip();
        $hitt->save();
        return view("web.page.index", $data);
    }
    public function project(Request $request, $id = null)
    {
        $data = [
            "project" => Project::find($id)
        ];
        $hitt = new Hit();
        $hitt->page = "/project/";
        $hitt->ip_address = $request->ip();
        $hitt->save();

        return view("web.page.detail_project", $data);
    }
}
