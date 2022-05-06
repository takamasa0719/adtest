<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title>管理システム</title>
</head>
<body>
    <div class="header">
        <h1>管理システム</h1>
    </div>
    <div class="search_container">
        <form action="/admin/search" method="get">
            @csrf
            <table>
                <tr>
                    <th>
                        <label for="name">お名前</label>
                    </th>
                    <td>
                        <input type="text" id="name" name="name">
                        <label class="gender_label" for="gender">性別</label>
                        <input type="radio" class="gender" name="gender" id="gender" value="0" checked>すべて
                        <input type="radio" class="gender" name="gender" id="gender" value="1">男性
                        <input type="radio" class="gender" name="gender" id="gender" value="2">女性
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="registered_at">登録日</label>
                    </th>
                    <td>
                        <input class="registered_at" type="date" id="registered_at" name="from" width="50">
                        <span>~</span>
                        <input class="registered_at" type="date" name="until">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="email">メールアドレス</label>
                    </th>
                    <td>
                        <input type="email" id="email">
                    </td>
                </tr>
            </table>
            <button class="search_btn"type="submit">検索</button>
            <input class="reset_btn" type="reset" value="リセット">
        </form>
    </div>
    <div class="result_container">
        {{ $items->links() }}
        <table>
            <tr class="heading">
                <th>ID</th>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>ご意見</th>
            </tr>
            @foreach ($items as $item)
            <tr  class="result_content">
                <td>{{ $item->id }}</td>
                <td>{{ $item->fullname }}</td>
                <td>
                    @if($item->gender == '1')
                    <p>男性</p>
                    @elseif($item->gender == '2')
                    <p>女性</p>
                    @endif
                </td>
                <td>{{ $item->email }}</td>
                <td>
                    <div>
                        <p class="appear_opinion">{{ Str::limit($item->opinion, 50) }}</p>
                        <p class="hide_opinion">{{ $item->opinion }}</p>
                    </div>
                </td>
                <td>
                    <form action="/admin/delete?id={{$item->id}}" method="post">
                        @csrf
                        <button class="delete_btn" type="submit">削除</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>