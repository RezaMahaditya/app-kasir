@extends('layout.app')

@section('konten')

@php
  $info_user = @info_user(session('user_id'));
@endphp
<div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="{{ url('pelanggan') }}">
              <div class="card card-hover">
                <div class="box bg-success text-center">
                  <h1 class="font-light text-white">
                    <i class="fas fa-address-book"></i>
                  </h1>
                  <h3 class="text-white">{{ @$total_pelanggan }}</h3>
                  <h6 class="text-white">Total Pelanggan</h6>
                </div>
              </div>
              </a>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="{{ url('penjualan') }}">
              <div class="card card-hover">
                <div class="box bg-danger text-center">
                  <h1 class="font-light text-white">
                    <i class="fas fa-shopping-cart"></i>
                  </h1>
                  <h3 class="text-white">{{ @$total_penjualan }}</h3>
                  <h6 class="text-white">Total Penjualan</h6>
                </div>
              </div>
              </a>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="{{ url('pembelian') }}">
              <div class="card card-hover">
                <div class="box bg-info text-center">
                  <h1 class="font-light text-white">
                    <i class="fas fa-shopping-basket"></i>
                  </h1>
                  <h3 class="text-white">{{ @$total_pembelian }}</h3>
                  <h6 class="text-white">Total Pembelian</h6>
                </div>
              </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="{{ url('produk') }}">
              <div class="card card-hover">
                <div class="box bg-primary text-center">
                  <h1 class="font-light text-white">
                    <i class="fas fa-clipboard-list"></i>
                  </h1>
                  <h3 class="text-white">{{ @$total_produk }}</h3>
                  <h6 class="text-white">Total Produk</h6>
                </div>
              </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="{{ url('supplier') }}">
              <div class="card card-hover">
                <div class="box bg-warning text-center">                
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-account-star"></i>
                  </h1>
                  <h3 class="text-white">{{ @$total_supplier }}</h3>
                  <h6 class="text-white">Total Supplier</h6>                  
                </div>
              </div>
              </a>    
            </div>
            @if (session('level') == 'administrator')
            <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="{{ url('user') }}">
              <div class="card card-hover">
                <div class="box bg-dark text-center">               
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-account-multiple"></i>
                  </h1>
                  <h3 class="text-white">{{ @$total_user }}</h3>
                  <h6 class="text-white">Total User</h6>                  
                </div>
              </div>
              </a>
            </div>
            @endif
</div>

<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <h4><small>Selamat Datang</small> {{ @$info_user['nama'] }}</h4>
        <h3><small>Anda Login Sebagai</small> {{ @$info_user['level'] }}</h3>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12" style="margin-top: 210px;">
<a class="btn-circle btn-lg btn-cyan float-end text-white" href="https://wa.me/6289523824566?text=Halo%20Admin%20Saya%20Ingin%20Membuat%20Penjualan">
  <i class="mdi mdi-send fs-3"></i>
</a>
</div>
</div>

@endsection