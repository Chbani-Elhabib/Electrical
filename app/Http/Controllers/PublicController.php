<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\People;
use App\Models\Order;

class PublicController extends Controller
{
    
    public function index(Request $request)
    {
        $Person = $request->session()->get('Person');
        $lang = $request->session()->get('lang');
        if(!isset($lang)){
            $lang = 'en' ;
        }
        if(isset($Person)){
            if( $Person->User_Group == 'User'){
                return view('Index', [ 'Person' => $Person , 'lang' => $lang ]);
            }else{
                return redirect()->back();
            }
        }
        return view('Index' , [ 'lang' => $lang ] );
    }

    public function Services(Request $request)
    {
        $Person = $request->session()->get('Person');
        $lang = $request->session()->get('lang');
        if(!isset($lang)){
            $lang = 'en' ;
        }
        if(isset($Person)){
            if( $Person->User_Group == 'User'){
                return view('Services', ['Person' => $Person , 'lang' => $lang  ]);
            }else{
                return redirect()->back();
            }
        }
        return view('Services' , [ 'lang' => $lang ] );
    }

    public function About(Request $request)
    {
        $Person = $request->session()->get('Person');
        $lang = $request->session()->get('lang');
        if(!isset($lang)){
            $lang = 'en' ;
        }
        if(isset($Person)){
            if( $Person->User_Group == 'User'){
                return view('About', ['Person' => $Person , 'lang' => $lang  ]);
            }else{
                return redirect()->back();
            }
        }
        return view('About' , [ 'lang' => $lang ] );
    }

    public function NewOrder(Request $request)
    {
        $Person = $request->session()->get('Person');
        $lang = $request->session()->get('lang');
        if(!isset($lang)){
            $lang = 'en' ;
        }
        if(isset($Person)){
            if( $Person->User_Group == 'User'){
                return view('NewOrder', ['Person' => $Person , 'lang' => $lang  ]);
            }else{
                return redirect()->back();
            }
        }
        return view('NewOrder' , [ 'lang' => $lang ] );
    }

    public function Lange(Request $request)
    {

        $lang = session()->get('lang');
        if( $lang == 'ar' ){
            session()->put('lang','en' );
        }else{
            session()->put('lang','ar' );
        }
        return redirect()->back();
    }

    public function logn(Request $request)
    {
        $Person = People::where('UserName', $request->UserName )->first();
        if(isset($Person)){
            $request->session()->put('Person',$Person);
            if( $Person->User_Group == 'Admin' ){
                return redirect('/admin') ;
            }
        }
        return redirect()->back();
    }

    public function profile(Request $request)
    {
        $Person = $request->session()->get('Person');
        $lang = $request->session()->get('lang');
        if(!isset($lang)){
            $lang = 'en' ;
        }
        if(isset($Person)){
            if( $Person->User_Group == 'User'){
                return view('Profile', ['Person' => $Person , 'lang' => $lang ]);
            }else{
                return redirect()->back();
            }
        }
        return redirect('/');
    }

    public function EditProfile(Request $request)
    {
        $Person = $request->session()->get('Person');
        $lang = $request->session()->get('lang');
        if(!isset($lang)){
            $lang = 'en' ;
        }
        if(isset($Person)){
            if( $Person->User_Group == 'User'){
                return view('EditProfile', ['Person' => $Person , 'lang' => $lang ]);
            }else{
                return redirect()->back();
            }
        }
        return redirect('/');
    }

    public function EditPassword(Request $request)
    {
        $Person = $request->session()->get('Person');
        $lang = $request->session()->get('lang');
        if(!isset($lang)){
            $lang = 'en' ;
        }
        if(isset($Person)){
            if( $Person->User_Group == 'User'){
                return view('EditPassword', ['Person' => $Person , 'lang' => $lang ]);
            }else{
                return redirect()->back();
            }
        }
        return redirect('/');
    }

    public function Orders(Request $request)
    {
        $Person = $request->session()->get('Person');
        $lang = $request->session()->get('lang');
        if(!isset($lang)){
            $lang = 'en' ;
        }
        if(isset($Person)){
            if( $Person->User_Group == 'User'){
                $Orders = Order::where('id_people' , $Person->id_people )->orderBy('created_at', 'desc')->get();
                return view('Orders', ['Person' => $Person , 'Orders' => $Orders , 'lang' => $lang ]);
            }else{
                return redirect()->back();
            }
        }
        return redirect('/');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('Person');
        return redirect()->back();
    }

}
