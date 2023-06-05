@extends('Admin/Html.Html')
@extends('Admin/HeaderAndNav.Nav')
@extends('Admin/HeaderAndNav.Header')
@section('order' , 'active')
@section('title' , 'orders')

@section('css')
@vite(['resources/css/Admin/Order.css'])
@endsection

@section('js')
@vite(['resources/js/Admin/Order.js'])
@endsection


@section('content')
    <section>

        <article class="clearfix">
            <button class='btn btn-success Neworder float-end'>New order</button>
        </article>

        <article>
            <form action="{{ url('/admin/stor') }}" method="POST" >
                @csrf
                <div>
                    <label for="UserName" class="form-label labels mb-0"><span class="position-relative text-danger" >*</span>User Name :</label>
                    <select class="form-select form-control form-select inputevalue " name='UserName'>
                        <option selected disabled></option>
                        @isset($Users)
                            @foreach( $Users as $User )
                                <option value='{{$User->id_people }}'>{{$User->UserName}}</option>
                            @endforeach
                        @endisset
                    </select>
                    <div class="form-text text-danger"></div>
                </div>

                <div>
                    <label for="phone" class="form-label"><span class="position-relative text-danger" >*</span>Phone :</label>
                    <input type="text" class="form-control inputevalue" name="phone" id="phone" >
                    <div class="form-text"></div>
                </div>

                <div>
                    <label for="body" class="form-label mb-0"><span class="position-relative text-danger" >*</span>body :</label>
                    <textarea name="body" class="form-control inputevalue" id="body" rows="8" placeholder="body"></textarea>                            
                    <div class="form-text"></div>
                </div>

                <div class="clearfix mt-2 me-4">
                    <button type="button" class="btn btn-success float-end addorder">Add order</button>
                </div>

            </form>
        </article>

        <article>
            @isset($Orders)
                <table id='example' class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Users</th>
                            <th scope="col">body</th>
                            <th scope="col">...</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($Orders as $Order)
                            <tr>
                                <th scope="row">
                                    <div class="usersin">
                                        <div>
                                            <img src="/users-image/{{$Order->Person->Photo}}"  alt="profaile users">
                                        </div>
                                        <h5>{{$Order->Person->UserName}}</h5>
                                    </div>
                                </th>
                                <td><h5>{{$Order->body}}</h5></td>
                                <td>
                                    <div>
                                        <a class="show" data='{{$Order->id_order}}'>
                                            <img src="/image/eye.png" alt="eye">
                                        </a>
                                        <a href="/admin/order/{{$Order->id_order}}/edit">
                                            <img src="/image/update.png" alt="update">
                                        </a>
                                        <a class="delete">
                                            <img src="/image/delete.png" alt="delete">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endisset
        </article>
        
    </section>
@endsection