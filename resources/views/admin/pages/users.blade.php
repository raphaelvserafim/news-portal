@extends('layouts.admin')

@section('title', 'Admin - Posts')


@section('content')

<div class="row">
  <div class="col-5 mb-1">
    <div class="card">
      <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <form action="{{ route('users.store') }}" method="POST">
          @csrf
          <div class="row">
            <div class="col-12 mb-2">
              <input type="text" name="name" placeholder="Name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="col-12 mb-2">
              <input type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
            </div>
            <div class="col-12 mb-2">
              <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <div class="col-12 mb-2">
              <select name="type" id="type" class="form-control">
                <option value="author" {{ old('type') == "author" ? 'selected' : '' }}>Author</option>
                <option value="admin" {{ old('type') == "admin" ? 'selected' : '' }}>Admin</option>
              </select>
            </div>
            <div class="col-12 mb-2">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-7">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-8">
            <h5 class="card-title">Users</h5>
          </div>
          <div class="col-4">
            <input class="form-control" type="search" placeholder="search">
          </div>
        </div>
        <div class="table-responsive">
          <table class="table text-nowrap align-middle mb-0">
            <thead>
              <tr class="border-2 border-bottom border-primary border-0">
                <th scope="col" class="ps-0">ID</th>
                <th scope="col" class="ps-0">Name</th>
                <th scope="col" class="ps-0">Email</th>
                <th scope="col" class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <th scope="row" class="ps-0">
                  1
                </th>
                <td>
                  ABC
                </td>
                <td>
                  rrr@gmail.com
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-info"><iconify-icon icon="line-md:edit"></iconify-icon></button>
                  <button class="btn btn-sm btn-danger"><iconify-icon icon="material-symbols:delete"></iconify-icon></button>
                </td>
              </tr>
            </tbody>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection