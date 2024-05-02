@extends('layouts.app')
@section('content')
    <section class="hero-banner">
        <div class="row">
            <div class="col-sm-6">
                <br><br><br>
                <div class="main-title">
                    <p>Selamat Datang di Inventory Music Merch!</p>
                    
                </div>
                <div class="short-desc">
                    <p>Dimas Nabil Arlia S - 1204220058</p>
                    <p>Sistem Informasi - Telkom University Surabaya</p>
                    <p>Project UTS Master Barang</p>
                </div>

            </div>
            <div class="col-sm-5">
                <img src="{{ Vite::asset('resources/images/profile/samid.png') }}" class="figure-profile img-fluid" alt="figure profile">
            </div>
        </div>
    </section>
@endsection
