@extends('layouts.layout')
@include('includes.sidebar')
@include('includes.banner')

@section('header')
    @parent
@endsection


@section('nav-bar')
    @parent
@endsection

@section('content')
    @include('includes.content')
@endsection

