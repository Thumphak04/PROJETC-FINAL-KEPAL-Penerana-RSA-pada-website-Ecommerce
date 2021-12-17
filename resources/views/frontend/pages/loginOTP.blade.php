@extends('frontend.layouts.master')

@section('title','SABA-Store || Login Verifikasi OTP')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Login_OTP</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
            
    <!-- Shop Login -->
    <section class="shop login section">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="login-form">
                        <h2>MASUKKAN KODE OTP</h2>
                        <p>Cek Email anda dan masukkan kode OTP yang dikrim untuk melanjutkan proses login ke aplikasai SABA-Store</p>
                        <i style="color: #ea4335">
                            <span>
                            <small>Hal ini dilakukan untuk proses keamanan 2FA pada akun anda.</small><br>
                            <small>Jangan berikan kode OTP atu kredensial tersebut kepada siapapun.</small>
                            </span>
                        </i>
                            <!-- Form -->
                        <form class="form" method="post" action="{{route('loginOTP.submit')}}">
                            @csrf
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Kode OTP Anda<span>*</span></label>
                                        <input type="text" name="otp" placeholder="KODE OTP ANDA" required="OTP" value="{{old('otp')}}">
                                        @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group login-btn">
                                        
                                        <button class="btn" type="submit">Verifikasi Kode OTP ANDA</button>
                                         <a  href="{{ route('login.form') }}">
                                            Kirim Ulang Kode OTP
                                        </a>
                                    
                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
        
                                       
                                        
                                    
                </div>
                
            </div>
        </div>
    </section>
    <!--/ End Login -->
@endsection
@push('styles')
<style>
    .shop.login .form .btn{
        margin-right:0;
    }
    .btn-facebook{
        background:#39579A;
    }
    .btn-facebook:hover{
        background:#073088 !important;
    }
    .btn-github{
        background:#444444;
        color:white;
    }
    .btn-github:hover{
        background:black !important;
    }
    .btn-google{
        background:#ea4335;
        color:white;
    }
    .btn-google:hover{
        background:rgb(243, 26, 26) !important;
    }
</style>
@endpush