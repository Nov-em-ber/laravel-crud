@extends('layouts.app')

@section('content')

<div class="container">
    <h1>会員情報編集</h1>
    <form action="{{ route('members.update' , $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" name="name" class="form-control" value="{{ $member->name }}" required>
        </div>
        <div class="form-group">
            <label for="phone_number">電話番号</label>
            <input type="text" name="phone_number" class="form-control" value="{{ $member->phone_number }}" required>
        </div>
        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" name="email" class="form-control" value="{{ $member->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">編集</button>
    </form>
    <form action="{{ route('members.destroy' , $member->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">削除</button>
    </form>
</div>

@endsection