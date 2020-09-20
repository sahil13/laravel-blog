<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

      <style>
      img{
          width:300px;
      }
      .text-center{
          text-align:center;
      }
      .cars{
          float:left;
    text-align: center;
    border-radius: 4px;
      }
      .cars img:hover{
          background:#000;
          opacity:0.7;
          cursor:pointer;
      }
      </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          
          @yield('markets');
            
        </div>
    </body>
</html>
