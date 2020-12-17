<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>交通費 App</title>
  @yield('styles')
  <link href="{{asset('css/styles.css')}}" rel="stylesheet">
</head>
<body>
<header>
  <nav class="my-navbar">
    <a class="my-navbar-brand" href="/">交通費 App</a>
  </nav>
</header>
<main>
  @yield('content')
</main>
@yield('scripts')
</body>
</html>