@extends('Admin/Html.Html')
@extends('Admin/HeaderAndNav.Nav')
@extends('Admin/HeaderAndNav.Header')
@section('dashboard' , 'active')

@section('css')
@vite(['resources/css/Admin/Dashboard.css'])
@endsection

@section('js')
@vite(['resources/js/Admin/Dashboard.js'])
@endsection

@section('content')
    <section>
        <article>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">

                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>

            </div>

            <div class="RecentOrders">
                @isset($Orders)
                    <div class="RecentOrders-title">
                        <h2>Recent Orders</h2>
                        <a href='/admin/order'>View All</a>
                    </div>
                    <table id='example' class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">customers</th>
                                <th scope="col">Phone</th>
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
                                            <a href='/admin/order'>
                                                <img src="/image/eye.png" alt="eye">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endisset
            </div>

        </article>
    </section>
@endsection