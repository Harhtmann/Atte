@extends('layouts.logout')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection

@section('content')
    <div class="login_content">
      <div class="login_heading">
        <h2>ログイン</h2>
      </div>
      <form class="login_form">
        @csrf
        <div class="login_form_group">
          <div class="login_form_group-content">
            <div class="login_form_input--text">
              <input type="email" name="email" placeholder="メールアドレス" />
            </div>
            <div class="login_form_error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="login_form_group">
          <div class="login_form_group-content">
            <div class="login_form_input--text">
              <input type="password" name="password" placeholder="パスワード" />
            </div>
            <div class="login_form_error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="login_form_button">
          <button class="login_form_button-submit" type="submit">ログイン</button>
        </div>
        <div class="login_footing">
            <p class="login_footing--text">
                アカウントをお持ちでない方はこちらから
            </p>

            <a class="login_footing--register" href="register.blade.php">
                会員登録
            </a>
        </div>
      </form>
    </div>
@endsection