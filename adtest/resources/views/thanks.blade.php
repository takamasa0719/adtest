<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
    <style>
        .container{
            text-align: center;
            position: relative;
            height: 100vh;
        }
        .content{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .thanks{
            margin-bottom: 50px;
        }
        .btn{
            background-color: #000;
            color: #fff;
            border-radius: 3px;
            cursor: pointer;
            padding: 10px;
        }
    </style>
    <title>thanks</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <p class="thanks">ご意見いただきありがとうございました。</p>
            <button class="btn">トップページへ</button>
        </div>
    </div>
</body>
</html>