<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1, minimum-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Raybon</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         <script src="http://cdn.bootcss.com/jquery/1.9.0/jquery.min.js"></script>
        <!-- Styles -->
        {{--<style>--}}
            {{--html, body {--}}
                {{--background-color: #fff;--}}
                {{--color: #636b6f;--}}
                {{--font-family: 'Raleway', sans-serif;--}}
                {{--font-weight: 100;--}}
                {{--height: 100vh;--}}
                {{--margin: 0;--}}
            {{--}--}}

            {{--.full-height {--}}
                {{--height: 100vh;--}}
            {{--}--}}

            {{--.flex-center {--}}
                {{--align-items: center;--}}
                {{--display: flex;--}}
                {{--justify-content: center;--}}
            {{--}--}}

            {{--.position-ref {--}}
                {{--position: relative;--}}
            {{--}--}}

            {{--.top-right {--}}
                {{--position: absolute;--}}
                {{--right: 10px;--}}
                {{--top: 18px;--}}
            {{--}--}}

            {{--.content {--}}
                {{--text-align: center;--}}
            {{--}--}}

            {{--.title {--}}
                {{--font-size: 84px;--}}
            {{--}--}}

            {{--.links > a {--}}
                {{--color: #636b6f;--}}
                {{--padding: 0 25px;--}}
                {{--font-size: 12px;--}}
                {{--font-weight: 600;--}}
                {{--letter-spacing: .1rem;--}}
                {{--text-decoration: none;--}}
                {{--text-transform: uppercase;--}}
            {{--}--}}

            {{--.m-b-md {--}}
                {{--margin-bottom: 30px;--}}
            {{--}--}}
        {{--</style>--}}
    </head>
    <body>
        <div id="app"></div>
        <script src="/js/app.js"></script>
    </body>
<script>
    $(function(){


      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
          // 'Request-City': 'zhengzhou',
          'Content-Type': 'application/x-www-form-urlencoded',
          'Accept': 'application/x..v1+json',
        }
      });
// $.get('http://api-test.1fangxin.cn/v1/common/district-business', {}, function(data) {
// console.log(data);
// })
// urlTab
//      api-test.1fangxin.cn  app.fx.test
//       $.ajax({
//         url: 'http://app.1fangxin.net/v1/common/community/index',
//         type: 'POST',
//         data:{
//            key: '金',
//         },
//         //method: 'GET',
//         dataType: 'json',
//         // headers:{
//         //   'Request-City':'zhengzhou',
//         // },
//         success: function(data) {
//           console.log(data)
//         },
//         error: function(data) {
//           console.log(data)
//         }
//
//       })

      })
</script>
</html>
