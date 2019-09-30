<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Master</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href=" url('css/style.css')">

    <!-- favicon -->
    <link rel="shortcut icon" href="url('makna.ico')" type="image/x-icon">
  </head>
  <body>
    <div class="wrapper">
      
      @include ('layouts.head')

        <div id="content" class="container">
          @yield ('content')
        </div>

      @include ('layouts.foot')
    
    </div>
  </body>
</html>
