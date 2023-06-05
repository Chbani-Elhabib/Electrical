<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\People;
use App\Models\Order;

class AdminControllers extends Controller
{
    public function Dashboard(Request $request)
    {
        $Person = $request->session()->get('Person');
        $Orders =  Order::orderBy('created_at', 'desc')->get();
        return view('Admin.Dashboard', ['Person' => $Person , 'Orders' => $Orders ]);
    }
    
    public function Profile(Request $request)
    {
        $Person = $request->session()->get('Person');
        return view('Admin.Profile', ['Person' => $Person]);
    }

    public function edit(Request $request)
    {
        $Person = $request->session()->get('Person');
        return view('Admin.Edit', ['Person' => $Person]);
    }

    public function EditPassword(Request $request)
    {
        $Person = $request->session()->get('Person');
        return view('Admin.EditPassword', ['Person' => $Person]);
    }

    public function SignOut(Request $request)
    {
        $request->session()->forget('Person');
        return redirect('/');
    }

    public function Users(Request $request)
    {
        $Person = $request->session()->get('Person');
        $users =  People::where('User_Group' , 'User')->orderBy('created_at', 'desc')->get();
        return view('Admin.Users', ['Person' => $Person , 'users' => $users ]);
    }

    public function UpdateCustomer(Request $request , $id )
    {
        $User = People::where('id_people' , $id )->first();
        if(isset($User)){
            $Person = $request->session()->get('Person');
            return view('Admin.EditUser', ['Person' => $Person , 'User' => $User ]);
        }
        return redirect()->back();
    }

    public function Order(Request $request)
    {
        $Person = $request->session()->get('Person');
        $Users = People::where('User_Group' , 'User')->get();
        $Orders =  Order::orderBy('created_at', 'desc')->get();
        return view('Admin.Order', ['Person' => $Person , 'Users' => $Users , 'Orders' => $Orders ]);
    }

    public function EditOrder(Request $request ,$id)
    {
        $Order =  Order::where('id_order' , $id )->first();
        if(isset($Order)){
            $Person = $request->session()->get('Person');
            return view('Admin.EditOrder', ['Person' => $Person , 'Order' => $Order ]);
        }
        return redirect()->back();
    }


}
