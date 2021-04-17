<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return  view('components.dashboard');  
    }

      public function widgets()
    {
        return  view('components.widgets');  
    }

    public function topnav(){

        return view('components.topnav');
    }
    public function topside(){

        return view('components.topside');
    }

    public function boxed(){

        return view('components.boxed');
    }

    public function fixedside(){

        return view('components.fixedside');
    }

    public function fixednav(){

        return view('components.fixednav');
    }

    public function chartjs(){
        
        return view('components.chartjs');
    }

    public function flot(){
        
        return view('components.flot');
    }

    public function inline(){

        return view('components.inline');
    }

    public function uplot(){

        return view('components.uplot');
    }

    public function general(){

        return view('components.general');
    }

    public function icon(){

        return view('components.icon');
    }

    public function buttons(){

        return view('components.buttons');
    }

    public function sliders(){

        return view('components.slider');
    }

}
