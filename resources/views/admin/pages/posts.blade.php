@extends('layouts.admin')

@section('title', 'Admin - Posts')


@section('content')

<div class="row">
  <div class="row col-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-8">
            <h5 class="card-title">All Posts</h5>
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
                <th scope="col" class="ps-0">Title</th>
                <th scope="col" class="text-center">Date</th>
                <th scope="col" class="text-center">Author</th>
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
                <td class="text-center">2024-10-30</td>
                <td class="text-center">Raphael Serafim</td>
                <td class="text-center">
                  <button class="btn btn-sm btn-info"><iconify-icon icon="line-md:edit"></iconify-icon></button>
                </td>
              </tr>
            </tbody>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection