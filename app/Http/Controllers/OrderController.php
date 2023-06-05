<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\People;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Person = new People();
        $Person->id_people  = Str::random(10);
        $Person->FullName = $request->Name;
        $Person->Country = 'Morroco';
        $Person->Regions = 'Souss-Massa' ;
        $Person->city = $request->city;
        $Person->Address = $request->Address;
        $Person->UserName = '';
        $Person->Password = '';
        $Person->User_Group = 'User';
        $Person->Telf = $request->Telf;
        $Person->Photo = 'Users.png';
        $Person->save();


        $Order = new Order();
        $Order->id_order = Str::random(10);
        $Order->id_people  = $Person->id_people ;
        $Order->save();

        return redirect()->back();
    }
     

    public function stor(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'UserName' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $User =  People::where('id_people' , $request->UserName )->first();
        if(isset($User)){
            $Order = new Order();
            $Order->id_order = Str::random(10);
            $Order->id_people  = $request->UserName ;
            $Order->body  = $request->body ;
            $Order->save();

            $User->Telf = $request->phone ;
            $User->save();

        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $Order =  Order::where('id_order' , $request->id )->first();
        if(isset($Order)){
            $Order->Person ;
            return $Order ;
        }
        return "no" ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Order = Order::where('id_order' , $id )->first();
        if(isset($Order)){

            // validation Telf
            if(isset($request->Telf)){
                $request->validate([
                    'Telf' => 'required|string',
                ]);
                $Order->Person->Telf = $request->Telf ;
            }
            $Order->Person->save();

            // Validate the body
            if (isset($request->body)) {
                $request->validate([
                    'body' => 'required|string',
                ]);
                $Order->body = $request->body ;
            }
            $Order->save();
            return redirect('/admin/order');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $Order = Order::where('id_order' , $request->id )->first();
        if(isset($Order)){
            $User = Order::where('id_order' , $request->id )->delete();
            return $User ;
        }
        return 'no';
    }
}
