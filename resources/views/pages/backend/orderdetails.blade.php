@extends('layouts.app')

@section('content')

    @include('component.admin.sideber')
    @include('component.admin.header')
    @include('component.admin.order.orderdetails')
    @include('component.admin.footer')

@endsection
