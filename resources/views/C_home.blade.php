@extends('C_layouts.layout')

@section('content')

        <div class="jumbotron" style="background:#B0C6CE;margin-top:50px;text-align: center;">
          <h1>クローンサイトへようこそ</h1>
          <h2>
            <a href="/bbs" style="color:C8D5B9;text-decoration:none;padding-bottom:50px;">掲示板はこちらから</a>
          </h2>
          <a href="login" class="btn btn-lg" style="background:#3B6064;color:white">ログイン</a>
          <a href="register" class="btn btn-lg" style="background:#3B413C;color:white">新規会員登録</a>
        </div>

@endsection
