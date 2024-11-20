@extends('layouts.app')

@section('content')
<div class="container">
    <h1>新規会員登録</h1>
    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone_number">電話番号</label>
            <input type="text" name="phone_number" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">登録</button>
    </form>
</div>
@endsection