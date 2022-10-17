@extends('Layouts.main')

@section('title')
    Hello Word
@endsection
@section('sidebar')
    @parent
    @if (!empty($users))
        @foreach ($users as $user)
            <p>Ta co user la : {{ $user['name'] }}</p>
        @endforeach
    @endif
@endsection

@section('content')
    <p>This is content from child</p>
@endsection
