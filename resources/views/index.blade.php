@extends('layouts.layout')
@include('includes.sidebar')
@include('includes.banner')

@section('header')
    @parent
@show

@section('nav-bar')
    @parent
@show

@section('content')
    @include('includes.content')
@endsection

