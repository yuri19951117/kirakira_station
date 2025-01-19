@extends('layouts.app')

    @section('content')

    <link href="{{ asset('css/kirakirastation.css') }}" rel="stylesheet">

    <div class="welcome-background">

        <!-- <div class="container">

        </div> -->

               <div class="container">
        <div class="row">
        
            <div class="col-md-3 mt-1 pt-2 container_background">
            <iframe width="300" height="180" src="https://www.youtube.com/embed/AP4sfChMka4?si=9ck147aMNGjp7ZlZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <br>
            ※動画の作成日は令和2年12月です。
            <br>
            <br>
            <h5> ◆開放時間 </h5>
                &nbsp;毎週木曜日・第2土曜日<br>
                &nbsp;10:30 ~ 14:00<br>
            <br>
            <h5> ◆場所 </h5>
            &nbsp;さざんかホール1階<br>
            <br>
            <h5> ◆問い合わせ先 </h5>
            &nbsp;きらステ会<br>
            &nbsp;<i class="fa fa-envelope-o fa-1x"></i>&nbsp;kirakirast.21@gmail.com<br>
            &nbsp;<i class="fa fa-phone fa-1x"></i>&nbsp;090-3727-3650（代表：井本）<br>
            <br>
            <h5> ◆SNS各種 </h5>
                <img src="{{ asset('img/instagram.jpg')}}" width="280" height="280"></a><br>

                <br>
                &nbsp;&nbsp;<img src="{{ asset('img/LINECODE.jpg')}}" width="240" height="240"></a><br>

                <br>
                <br>
               
                @guest
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ route('register') }}">会員登録</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a href="{{ route('login') }}">>> スタッフログインページ</a>
                    </li>
                    <hr>

                @else
                <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ route('register') }}">きらステだよりアップロード</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ route('register') }}">会員登録</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            ログアウト
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                
                 


                @endguest
               
            </div>

            
            <div class="col-md-9 mt-1 rounded">
                        
                        <div class="container">
                        <div class="row">
                            
                            <img src="{{ asset('img/きらステだより.jpg')}}" width="280" height="1200"></a>
                        </div>
                        </div>
                </div>
                    
            </div>           
        </div>

       
    </div>
</div>




    </div>
                        
@endsection



