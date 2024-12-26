@extends('layouts.app')


@section('content')

    @include('component.admin.header')
    @include('component.admin.sideber')
    @include('component.admin.customer.customer-details')
    @include('component.admin.footer')

@endsection
