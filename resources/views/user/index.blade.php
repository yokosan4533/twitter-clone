@extends('C_layouts.layout')

@section('content')
    ユーザー一覧<br>
    <table>
              <tr><th>ユーザーID</th><th>名前</th></tr>
    @foreach($users as $user)
          <tr><td>{{ $user->id }}</td><td>{{ $user->name }}</td>
    @endforeach
    </table>
@endsection
