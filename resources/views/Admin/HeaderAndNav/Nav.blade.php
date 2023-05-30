@section('Nav')
    <div class="navigation">
        <ul>

            <li>
                <a href="/admin">
                    <span class="icon">
                        <ion-icon name="logo-apple"></ion-icon>
                    </span>
                    <span class="title">Brand Name</span>
                </a>
            </li>

        </ul>
            
        <ul>
            <li class="@yield('dashboard')">
                <a href="/admin">
                    <span class="icon">
                        <ion-icon name="logo-windows"></ion-icon>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li class="@yield('customers')">
                <a href="/admin/customers">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <span class="title">Customers</span>
                </a>
            </li>

            <li class="@yield('order')">
                <a href="/admin/order">
                    <span class="icon">
                        <ion-icon name="bookmarks-outline"></ion-icon>
                    </span>
                    <span class="title">Order</span>
                </a>
            </li>

        </ul>

        <ul>

            <li>
                <a href="/admin/signOut">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>

        </ul>

    </div>
@endsection