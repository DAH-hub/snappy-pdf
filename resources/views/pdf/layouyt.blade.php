<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
{{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">--}}
    <style>

        .page{
            page-break-after: always;
        }
        .logo{
            width:120px;
            height: 40px;
        }
        .text_area{
            padding: 10px;
            border-radius:8px;
            background: white ;
            border: 1px solid #ced4da;
            border-left: 4px solid #0dcaf047 ;
            white-space:pre-line ;
            overflow-wrap: anywhere;

        }
    </style>
</head>
<body>
@yield('content')
</body>
</html>
