@extends('layout/app')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css')}}">
@endsection

@section('content')
@include('components.sidebar')
    
@endsection