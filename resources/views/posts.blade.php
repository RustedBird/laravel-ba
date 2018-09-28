@extends('layouts.layout')
@include('includes.sidebar')
@section('header')
    @parent
@endsection
@section('nav-bar')
    @parent
@endsection

@section('content')
    @include('includes.content')
@endsection