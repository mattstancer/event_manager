@extends('admin.master')
@section('style')
    {{ HTML::style('css/admin/login.css') }}
@endsection
@section('title','Admin Event Manager - Logowanie')
@section('content')
    <div class="login-page">
        <div class="form">

            <form class="login-form" method="post">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <input name="user" type="text" placeholder="username"/>
                <input name="password" type="password" placeholder="password"/>
                <button type="submit">login</button>

            </form>
        </div>
    </div>
@endsection