<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .header{
      width:100%;
      border:1px solid #000;
      height: 100px;
      text-align: center;
      line-height:100px;
      background: green;
      color: white;
    }
    
    .content{
      width:100%;
      border:1px solid #000;
      height: 700px;
      text-align: center;
      background: red;
      color: white;
    }
    
    .footer{
      width:100%;
      border:1px solid #000;
      height: 50px;
      text-align: center;
      line-height:50px;
      background: blue;
      color: white;
    }
  </style>
</head>
<body>
  <div class="header">
    @include('components.header')
  </div>
  <div class="content">
     @yield('content')
  </div>
  <div class="footer">
  @include('components.footer')
    
  </div>
</body>
</html>