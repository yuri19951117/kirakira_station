<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>アップロード完了</title>
</head>

<body>
    アップロードが完了しました。
   <!-- <table>
       <tr>
           <th>ID</th>
           <td>{{ $product->id }}</td>
       </tr>
       <tr>
           <th>アップロード日時</th>
           <td>{{ $product->updated_at }}</td>
       </tr>      
   </table> -->
<br>
   <a href="{{ route('login') }}">>> ホーム画面へ戻る</a>
</body>

</html>