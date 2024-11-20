@extends('layouts.app')

@section('content')
<div class="container">
    <h1>会員一覧</h1>
    <a href="{{ route('members.create') }}" class="btn btn-primary mb-2">新規会員登録</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>名前</th>
                <th>電話番号</th>
                <th>メールアドレス</th>
                <th>編集</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
            <tr>
                <td>{{ $member->name }}</td>
                <td>{{ $member->phone_number }}</td>
                <td>{{ $member->email }}</td>
                <td>
                    <a href="{{ route('members.edit' , $member->id) }}" class="btn btn-warning">編集</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection