@section('Header')
    <div class="topbar">
        
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>

        <div class="position-relative" style="top: 0px;height: 55px;width: 55px;">
            <div class="user">
                <img src="/users-image/{{$Person->Photo}}" alt="image user">
            </div>
            <div class="menu">

                <div class="profile d-flex align-items-center mb-1">
                    <div class="imageprofile">
                        <img src="/users-image/{{$Person->Photo}}" />
                    </div>
                    <h2 class="mb-0 ms-2">{{$Person->UserName }}</h2>
                </div>

                <ul class="ps-1">

                    <a href="{{ URL('/admin/profile')}}">
                        <li>
                            <ion-icon name="person-outline"></ion-icon>
                            {{ __('Header.Myprofile') }}
                        </li>
                    </a>

                    <a href="{{ URL('/admin/profile/edit')}}">
                        <li>
                            <ion-icon name="settings-outline"></ion-icon>
                            {{ __('Header.Updateprofile') }}
                        </li>
                    </a>

                    <a href="{{ URL('/admin/profile/edit-password')}}">
                        <li>
                            <ion-icon name="key-outline"></ion-icon>
                            {{ __('Header.Updatepassword') }}
                        </li>
                    </a>


                    <a href="/lange" >
                        <li>
                            <ion-icon name="language-outline"></ion-icon>
                            {{ __('Header.lang') }}
                        </li>
                    </a>

                    <a href="/admin/signout">
                        <li>
                            <ion-icon name="log-out-outline"></ion-icon>
                            {{ __('Header.Logout') }}
                        </li>
                    </a>

                </ul>

            </div>
        </div>
    </div>
@endsection