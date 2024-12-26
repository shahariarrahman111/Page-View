@extends('layouts.app')


@section('content')

    @include('component.admin.header')
    @include('component.admin.sideber')
    @include('component.admin.password.create-password')
    @include('component.admin.footer')

@endsection
