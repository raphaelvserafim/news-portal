@extends('layouts.app')

@section('title', 'Home')


@section('content')

@include('posts.trending')

@include('posts.weekly')

@include('posts.weekly2')


@endsection