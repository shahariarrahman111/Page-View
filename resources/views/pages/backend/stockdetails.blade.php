@extends('layouts.app')


@section('content')

    @include('component.admin.header')
    @include('component.admin.sideber')
    @include('component.admin.stock.stockdetails')
    @include('component.admin.footer')

@endsection