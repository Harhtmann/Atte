@extends('layouts.logout')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('content')
    <div class="Atte__content">
      <div class="Atte__heading">
        <h2>会員登録</h2>
      </div>
      <form class="form" action="/register" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="name" name="name" placeholder="名前" />
            </div>
            <div class="form__error">
              @error('name')
                {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="メールアドレス" />
            </div>
            <div class="form__error">
              @error('email')
                {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="password" name="password" placeholder="パスワード" />
            </div>
            <div class="form__error">
              @error('password')
                {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="password" name="password_confirmation" placeholder="確認用パスワード" />
            </div>
            <div class="form__error">
              @error('password_confirmation')
                {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">会員登録</button>
        </div>
        <div class="Atte__footing">
            <p class="Atte__footing--text">
                アカウントをお持ちの方はこちら
            </p>

            <a class="Atte__footing--login" href="/login.blade.php">
                ログイン
            </a>
        </div>
      </form>
    </div>
@endsection