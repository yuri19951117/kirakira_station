<nav class="navbar navbar-expand-md navbar-light shadow-sm header_background">

<div class="logo">
    <img src="{{ asset('img/kirakira.png')}}" width="300" height="50"></a>
</div>  

<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mr-5 mt-2">

          

                @guest
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ route('register') }}">会員登録</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                    </li>
                    <hr>

                @else
                
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            ログアウト
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                
                 


                @endguest
            </ul>
        </div> -->

            

</nav>
