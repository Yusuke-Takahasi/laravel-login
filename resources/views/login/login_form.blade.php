<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログインフォーム</title>
    <!--Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--Scripts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--Scripts -->
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
</head>
<body>
    <main class="form-signin" method="POST" action="{{ route('login') }}">
    <form>
    @csrf
    <h1 class="h3 mb-3 fw-normal">ログインフォーム</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    
    <button class="w-100 btn btn-lg btn-primary" type="submit">ログイン</button>
    
    </form>
    </main>

</body>
</html>