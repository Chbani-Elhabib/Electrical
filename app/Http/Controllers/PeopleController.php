<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\People;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Str;

class PeopleController extends Controller
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
        // Validate the inputs
        $request->validate([
            'UserName' => 'required|string|max:255',
            'Password' => 'required|string|max:255',
        ]);
        $Person = new People();
        $Person->id_people  = Str::random(10);
        $Person->FullName = '';
        $Person->Country = 'Morroco';
        $Person->Regions = 'Souss-Massa' ;
        $Person->city = '';
        $Person->Address = '';
        $Person->UserName = $request->UserName;
        $Person->Password = Hash::make($request->Password);
        $Person->User_Group = 'User';
        $Person->Telf = '';
        $Person->Photo = 'Users.png';
        $Person->save();
        $request->session()->put('Person',$Person);
        return redirect()->back();

    }

    public function stor(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'UserName' => 'required|string|max:255',
            'Password' => 'required|string|max:255',
        ]);

        
        // Validate the Telf
        if (isset($request->Telf)) {
            $request->validate([
                'Telf' => 'required|string',
            ]);
            $telf = $request->Telf;
        }else{
            $telf = '';
        }

        // Validate the Photo
        if (isset($request->Photo)) {
            if(in_array($request->Photo->extension(), ['jpeg', 'png', 'jpg', 'gif', 'svg'])){
                $image = time().'.'.$request->Photo->extension();
                $request->Photo->move('users-image/', $image );
            }else{
                $image = 'Users.png';
            }
        }else{
            $image = 'Users.png';
        };

        // Validate the FullName
        if (isset($request->FullName)) {
            $FullName = $request->FullName ;
        }else{
            $FullName = "" ;
        }

        // Validate the city
        if (isset($request->city)) {
            $city = $request->city ;
        }else{
            $city = "" ;
        }

        // Validate the Address
        if (isset($request->Address)) {
            $Address = $request->Address ;
        }else{
            $Address = "" ;
        }

        $Person = new People();
        $Person->id_people  = Str::random(10);
        $Person->FullName = $FullName;
        $Person->Country = 'Morroco';
        $Person->Regions = 'Souss-Massa' ;
        $Person->city = $city;
        $Person->Address = $Address;
        $Person->UserName = $request->UserName;
        $Person->Password = Hash::make($request->Password);
        $Person->User_Group = 'User';
        $Person->Telf = $telf;
        $Person->Photo = $image;
        $Person->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $User =  People::where('id_people' , $request->id )->first();
        if(isset($User)){
            return $User ;
        }
        return "no" ;
    }

    public function showNumber( Request $request)
    {
        $User =  People::where('id_people' , $request->id )->first();
        if(isset($User)){
            return $User ;
        }
        return "no" ;
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id )
    {
        $User = People::where('id_people' , $id )->first();
        if(isset($User)){

            // validation Password 
            if(isset($request->Password)){
                $request->validate([
                    'Password' => 'required|string|max:255',
                ]);
                $Password = Hash::make($request->Password);
            }else{
                $Password = $User->Password;
            }

            // validation Telf
            if(isset($request->Telf)){
                $request->validate([
                    'Telf' => 'required|string',
                ]);
                $Telf = $request->Telf ;
            }else{
                $Telf = $User->Telf;
            }

            // Validate the FullName
            if (isset($request->FullName)) {
                $request->validate([
                    'FullName' => 'required|string',
                ]);
                $FullName = $request->FullName ;
            }else{
                $FullName = $User->FullName; ;
            }

                // Validate the city
            if (isset($request->city)) {
                $request->validate([
                    'city' => 'required|string',
                ]);
                $city = $request->city ;
            }else{
                $city = $User->city ;
            }

            // Validate the Address
            if (isset($request->Address)) {
                $Address = $request->Address ;
            }else{
                $Address = $User->Address ;
            }

            // Validate the Photo
            if (isset($request->Photo)) {
                if(in_array($request->Photo->extension(), ['jpeg', 'png', 'jpg', 'gif', 'svg'])){
                    if($User->Photo != 'Users.png' ){
                        if(File::exists(public_path('users-image/' . $User->Photo))){
                            $deleteimage = 'users-image/' . $User->Photo ;
                            File::delete(public_path($deleteimage));
                        }
                    }
                    $image = time().'.'.$request->Photo->extension();
                    $request->Photo->move('users-image/', $image );
                }else{
                    $image = $User->Photo ;
                }
            }else{
                $image = $User->Photo ;
            };



            $User->FullName = $FullName;
            $User->city = $city;
            $User->Address = $Address;
            $User->UserName = $request->UserName;
            $User->Password = $Password;
            $User->Telf = $Telf;
            $User->Photo = $image;
            $User->save();
            return redirect('/admin/customers');

        }
        return redirect()->back();
    }
     

    public function UpdateProfile(Request $request)
    {
        $Person = $request->session()->get('Person');
        if(isset($Person)){

            // validation Telf
            if(isset($request->Telf)){
                $request->validate([
                    'Telf' => 'required|string',
                ]);
                $Telf = $request->Telf ;
            }else{
                $Telf = $Person->Telf;
            }

            // Validate the FullName
            if (isset($request->FullName)) {
                $request->validate([
                    'FullName' => 'required|string',
                ]);
                $FullName = $request->FullName ;
            }else{
                $FullName = $Person->FullName; ;
            }

                // Validate the city
            if (isset($request->city)) {
                $request->validate([
                    'city' => 'required|string',
                ]);
                $city = $request->city ;
            }else{
                $city = $Person->city ;
            }

            // Validate the Address
            if (isset($request->Address)) {
                $Address = $request->Address ;
            }else{
                $Address = $Person->Address ;
            }

            // Validate the Photo
            if (isset($request->Photo)) {
                if(in_array($request->Photo->extension(), ['jpeg', 'png', 'jpg', 'gif', 'svg'])){
                    if($Person->Photo != 'Users.png' ){
                        if(File::exists(public_path('users-image/' . $Person->Photo))){
                            $deleteimage = 'users-image/' . $Person->Photo ;
                            File::delete(public_path($deleteimage));
                        }
                    }
                    $image = time().'.'.$request->Photo->extension();
                    $request->Photo->move('users-image/', $image );
                }else{
                    $image = $Person->Photo ;
                }
            }else{
                $image = $Person->Photo ;
            };



            $Person->FullName = $FullName;
            $Person->city = $city;
            $Person->Regions = 'Souss-Massa';
            $Person->Address = $Address;
            $Person->UserName = $request->UserName;
            $Person->Telf = $Telf;
            $Person->Photo = $image;
            $Person->save();


        }
        return redirect()->back();
    }


    public function UpdatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
        ]);
        $Person = $request->session()->get('Person');
        $Person->Password = Hash::make($request->password);
        $Person->save();
        return redirect()->back();
    }


    public function loginandup(Request $request)
    {

        // purely username and password in database
        if(isset($request['username']) && isset($request['password'])){
            $person = People::where('UserName', $request['username'])->first();
            if(isset($person)){
                if (Hash::check($request['password'], $person->Password)){
                    return "Yes";
                }else{
                    return "No";
                }
            }else{
                return "No";
            }
        };

        // purely username in database
        if(isset($request['username'])){
            if(People::where('UserName', $request['username'])->first()){
                return "Yes" ;
            }else{
                return "No" ;
            };
        };
    }

    public function ValidationPassword(Request $request)
    {
        // purely Password in database
        if(isset($request['password'])){
            $Person = $request->session()->get('Person');
            if (Hash::check($request->password, $Person->Password )){
                return "Yes" ;
            }else{
                return "No" ;
            };
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $User = People::where('id_people' , $request->id )->first();
        if(isset($User)){
            if( $User->Photo != 'Users.png'){
                if(File::exists(public_path('users-image/' . $User->Photo))){
                    $deleteimage = 'users-image/' . $User->Photo ;
                    File::delete(public_path($deleteimage));
                }
            }
            $User = People::where('id_people' , $request->id )->delete();
            return $User ;
        }
        return 'no';
    }

    public function order(Request $request)
    {
        $Person = $request->session()->get('Person');
        if(isset($Person)){

            // Validate the Telf
            $request->validate([
                'Telf' => 'required|string',
            ]);
    
            // Validate the FullName
            if (isset($request->Name)) {
                $Name = $request->Name ;
            }else{
                $Name = $Person->FullName ;
            }
    
    
            // Validate the Address
            if (isset($request->Address)) {
                $Address = $request->Address ;
            }else{
                $Address = $Person->Address ;
            }


            $Person->Telf = $request->Telf;
            $Person->FullName = $Name;
            $Person->Address = $Address ;
            $Person->save();


            // Validate the body
            if (isset($request->body)) {
                $body = $request->body ;
            }else{
                $body = '' ;
            }

            $Order = new Order();
            $Order->id_order  = Str::random(10) ;
            $Order->id_people  = $Person->id_people ;
            $Order->body = $body ;
            $Order->save();

        }
    
        return redirect()->back();

    }

}
