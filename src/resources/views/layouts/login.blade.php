<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Atte</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common-login.css') }}" />
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Atte
      </a>
      <a class="header_home_button" href="/timestamp.blade.php">
        ホーム
      </a>
      <a class="header_timelist_button" href="/timelist.blade.php">
        日付一覧
      </a>
      <a class="header_logout_button" href="/login.blade.php">
        ログアウト
      </a>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

  <footer class="footer">
    <div class="footer__inner">
        <p class="footer__text">Atte, inc.</p>
    </div>
  </footer>
</body>

</html>