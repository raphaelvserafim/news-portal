@extends('layouts.admin')

@section('title', 'ADM - Login')


@section('content')

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">
  <div
    class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center w-100">
      <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-6 col-xxl-3">
          <div class="card mb-0">
            <div class="card-body">
              <a href="/" class="text-nowrap logo-img text-center d-block py-3 w-100">
                <img src="../assets/images/logos/logo-light.svg" alt="">
              </a>
              <p class="text-center">Your Social Campaigns</p>
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Username/Email</label>
                  <input placeholder="Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input placeholder="Password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <a href="/" class="btn btn-primary w-100 py-8 fs-4 mb-4">Sign In</a>
                <div class="d-flex align-items-center justify-content-between mb-4">
                  <a class="text-primary fw-bold" href="/forgot-password">Forgot Password ?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection