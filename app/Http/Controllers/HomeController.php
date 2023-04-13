<?php

namespace App\Http\Controllers;

use App\Models\Hit;
use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $data = [
            "project" => Project::all()
        ];
        $hitt = new Hit();
        $hitt->page = "/article/";
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
        $hitt->page = "/article/";
        $hitt->ip_address = $request->ip();
        $hitt->save();

        return view("web.page.detail_project", $data);
    }
}
