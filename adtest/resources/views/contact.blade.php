<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/contact.css')}}">
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <title>お問い合わせ</title>
</head>
<body>
    <div class="header">
        <h1>お問い合わせ</h1>
    </div>
    <div class="content">
        <form action="/confirm" method="post">
            @csrf
            <table>
                <tr>
                    <th>
                        <label for="name">お名前</label>
                    </th>
                    <td>
                        <input class="form_name" name="first"type="text" id="name" value="{{ old('first') }}" required/>
                        <input class="form_name" name="last"type="text" value="{{ old('last') }}" required/><br>
                        <p class="name_example mg">例) 山田</p>
                        <p class="name_example">例) 太郎</p>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="gender">性別</label>
                    </th>
                    <td>
                        <input class="form_gender" type="radio" name="gender" value="1" checked>男性
                        <input class="form_gender" type="radio" name="gender" value="2">女性
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="email">メールアドレス</label>
                    </th>
                    <td>
                        <input class="form" name="email" type="email" id="email" value="{{ old('email') }}" required><br>
                        <p class="example">例) test@example.com</p>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="postal-code">郵便番号</label>
                    </th>
                    <td>
                        <span class="postal_mark">〒</span><input class="form postal" value="{{ old('postcode') }}" type="text" id="postal-code" name="zip01" size="10" title="8文字"
                        maxlength="8" minlength="8" pattern="^[0-9 ０-９]{3}[ー -][0-9 ０-９]{4}$" 
                        onKeyUp="AjaxZip3.zip2addr(this, '', 'addr01', 'addr01');" required/><br>
                        <p class="example">例) 123-4567</p>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="addr01">住所</label>
                    </th>
                    <td>
                        <input class="form" type="text" id="addr01"name="addr01" value="{{ old('address') }}" size="40" required><br>
                        <p class="example">例) 東京都渋谷区千駄ヶ谷1-2-3</p>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="label_building" for="building">建物名</label>
                    </th>
                    <td>
                        <input class="form" type="text" id="building" name="building"value="{{ old('building') }}" ><br>
                        <p class="example">例) 千駄ヶ谷マンション101</p>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="opinion">ご意見</label>
                    </th>
                    <td>
                        <textarea class="form" id="opinion" name="opinion" cols="30" rows="10" maxlength="120" required>{{ old('opinion') }}</textarea>
                    </td>
                </tr>
            </table>
            <button class="confirm_btn" type="submit">確認</button>
        </form>
    </div>
</body>
</html>