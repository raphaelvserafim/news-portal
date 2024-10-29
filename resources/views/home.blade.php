@extends('layouts.app')

@section('title', 'Home')


@section('content')

@include('posts.trending')

@include('posts.weekly')


@endsection