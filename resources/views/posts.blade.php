@extends('layouts.layout')
@include('includes.sidebar')
@section('header')
    @parent
@show
@section('nav-bar')
    @parent
@show

@section('content')
    @include('includes.content')
@endsection