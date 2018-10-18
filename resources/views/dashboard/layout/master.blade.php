

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    @include('dashboard.partial.nav')

    <div class="container-fluid">
      <div class="row">
        @include('dashboard.partial.sidebar')


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        @yield('content')
   
        
        </main>
      </div>
    </div>
    <script src="/js/app.js"></script>
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    

  </body>
</html>
