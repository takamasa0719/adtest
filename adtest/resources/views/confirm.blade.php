<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
    <title>内容確認</title>
</head>
<body>
    <div class="header">
        <h1>内容確認</h1>
    </div>
    <div class="content">
        <form action="/confirm/post" method="post">
            @csrf
            <table>
                <tr>
                    <th>お名前</th>
                    <td>{{ $first }} {{ $last }}</td>
                    <input name="first" value="{{ $first }}" type="hidden">
                    <input name="last" value="{{ $last }}" type="hidden">
                </tr>
                <tr>
                    <th>性別</th>
                    <td>
                        @if($gender == 1)
                            <p>男性</p>
                        @elseif($gender == 2)
                            <p>女性</p>
                        @endif
                    </td>
                    <input name="gender" value="{{ $gender }}" type="hidden">
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>{{ $email }}</td>
                    <input name="email" value="{{ $email }}" type="hidden">
                </tr>
                <tr>
                    <th>郵便番号</th>
                    <td>{{ $postal }}</td>
                    <input name="postcode" value="{{ $postal }}" type="hidden">
                </tr>
                <tr>
                    <th>住所</th>
                    <td>{{ $addr01 }}</td>
                    <input name="address" value="{{ $addr01 }}" type="hidden">
                </tr>
                <tr>
                    <th>建物名</th>
                    <td>{{ $building }}</td>
                    <input name="building" value="{{ $building }}" type="hidden">
                </tr>
                <tr>
                    <th>ご意見</th>
                    <td class="opinion">{{ $opinion }}</td>
                    <input name="opinion" value="{{ $opinion }}" type="hidden">
                </tr>
            </table>
            <button class="post_btn" name="post" type="submit" value="true">送信</button>
            <button class="back_btn" name="back" type="submit" value="true">修正する</button>
        </form>
    </div>
</body>
</html>