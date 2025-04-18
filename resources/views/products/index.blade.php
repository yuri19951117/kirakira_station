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
            <h5> ◆カレンダー </h5>
            <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=Asia%2FTokyo&showPrint=0&showTitle=0&showTz=0&showCalendars=0&src=a2lyYWtpcmFzdC4yMUBnbWFpbC5jb20&color=%23039BE5" style="border-width:0" width="310" height="310" frameborder="0" scrolling="no"></iframe>            <br>
            <br>
            <h5> ◆SNS各種 </h5>
                <img src="{{ asset('img/instagram.jpg')}}" width="160" height="160"></a>&nbsp;<img src="{{ asset('img/LINECODE.jpg')}}" width="130" height="130"></a><br>

                <br>
                <br>
               
                @guest
                  
                        <a href="{{ route('login') }}">>> スタッフログインページ</a>
                  
                    <hr>

                @else
                
                 
                    <a href="{{ route('products.create') }}">>>きらステだよりアップロード</a>
                 <br>
                        <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            >>ログアウト
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                
                 


                @endguest
               
            </div>

            
            <div class="col-md-9 mt-1 rounded">
                        
                        <!-- <div class="container">
                        <div class="row">
                            
                            <img src="{{ asset('img/きらステだより.jpg')}}" width="280" height="1200"></a>
                        </div>
                        </div> -->


  <table>


    <tr>
    <!-- 最新の日付を取得 -->
      <!-- <th>投稿日</th><td>{{ $products->created_at }}</td> -->
    </tr>

    <tr>
        <!-- 最新の画像を取得 -->
        
          <img src="{{ asset('storage/products/'. $products->image_name)}}" class="display"></a>
          
    </tr>
 
  </table>
 

                </div>
                    
            </div>           
        </div>

       
    </div>
</div>




    </div>
                        
@endsection





