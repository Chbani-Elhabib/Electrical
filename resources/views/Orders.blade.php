@extends('Html.Html')
@extends('HeaderAndFouter.Header')
@section('title' , 'Orders')


@section('css')
@vite(['resources/css/Orders.css'])
@endsection


@section('content')
<section>

    <article class='mt-1'>
        <div class="content-body">
            <h2 class="font-w600 mb-0">Orders</h2>
        </div>
    </article>

    <article>
        @isset($Orders)
            @if($Orders->count())
                <table id='example' class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">date</th>
                            <th scope="col">body</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($Orders as $Order)
                            <tr>
                                <th scope="row"><h5>{{$Order->updated_at}}</h5></th>
                                <td><h5>{{$Order->body}}</h5></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="dont"><p class="text-center fs-2 opacity-25">You don't have orders yet !</p></div>
            @endif
        @endisset
    </article>
</section>
@endsection 