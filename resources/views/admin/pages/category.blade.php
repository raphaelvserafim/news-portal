@extends('layouts.admin')

@section('title', 'Admin - Posts')


@section('content')

<div class="row">
  <div class="row col-5 mb-1">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-12 mb-2">
            <input type="text" placeholder="Name" class="form-control">
          </div>
          <div class="col-12 mb-2">
            <button class="btn btn-success">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row col-7">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-8">
            <h5 class="card-title">Category</h5>
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
                <td class="text-center">
                  <button class="btn btn-info">Edit</button>
                </td>
              </tr>
            </tbody>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection