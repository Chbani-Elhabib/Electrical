<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    public function Dashboard(Request $request)
    {
        return view('Admin.Dashboard');
        // $Person = $request->session()->get('Person');
        return view('verification', ['Person' => $Person]);
    }
    
    public function Profile(Request $request)
    {
        return view('Admin.Profile');
        // $Person = $request->session()->get('Person');
        return view('verification', ['Person' => $Person]);
    }

    public function Update(Request $request)
    {
        return view('Admin.Update');
        // $Person = $request->session()->get('Person');
        return view('verification', ['Person' => $Person]);
    }

    public function SignOut(Request $request)
    {
        // return view('Dashboard');
        // // $Person = $request->session()->get('Person');
        // return view('verification', ['Person' => $Person]);
    }

    public function Users(Request $request)
    {
        return view('Admin.Users');
        // $Person = $request->session()->get('Person');
        return view('verification', ['Person' => $Person]);
    }

    public function UpdateUser(Request $request)
    {
        return view('Admin.UpdateUser');
        // $Person = $request->session()->get('Person');
        return view('verification', ['Person' => $Person]);
    }

    public function Order(Request $request)
    {
        return view('Admin.Order');
        // $Person = $request->session()->get('Person');
        return view('verification', ['Person' => $Person]);
    }

    public function UpdateOrder(Request $request)
    {
        return view('Admin.UpdateOrder');
        // $Person = $request->session()->get('Person');
        return view('verification', ['Person' => $Person]);
    }
}
