@extends('Admin/Html.Html')
@extends('Admin/HeaderAndNav.Nav')
@extends('Admin/HeaderAndNav.Header')
@section('title' , 'Edit Order')

@section('css')
@vite(['resources/css/Admin/EditOrder.css'])
@endsection

@section('js')
@vite(['resources/js/Admin/EditOrder.js'])
@endsection


@section('content')
    <section>

        <article>
            <form action="/admin/order/{{$Order->id_order}}/update" method="POST" >
                @csrf
                <div>
                    <label for="UserName" class="form-label labels mb-0">User Name :</label>
                    <select class="form-select form-control form-select inputevalue " name='UserName'>
                        <option selected disabled></option>
                        <option selected value='{{$Order->Person->id_people }}'>{{$Order->Person->UserName}}</option>
                    </select>
                    <div class="form-text text-danger"></div>
                </div>

                <div>
                    <label for="phone" class="form-label">Phone :</label>
                    <input type="text" class="form-control inputevalue" value="{{$Order->Person->Telf}}" name="Telf" id="phone" >
                    <div class="form-text"></div>
                </div>

                <div>
                    <label for="body" class="form-label mb-0">body :</label>
                    <textarea name="body" class="form-control inputevalue" id="body" rows="8" placeholder="body">{{$Order->body}}</textarea>                            
                    <div class="form-text"></div>
                </div>

                <div class="clearfix mt-2 me-4">
                    <button type="button" class="btn btn-success float-end addorder">Update order</button>
                    <a href="/admin/order">
                        <button type='button' class="btn btn-danger me-2 float-end">Clean</button>
                    </a>
                </div>

            </form>
        </article>
        
    </section>
@endsection