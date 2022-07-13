@extends('layouts.app')

@section('content')

<!-- Author: Ella Alinda-->
<!--E-Mail: ella@ilolicon.com-->
<!--Time: 2022-07-05-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('欢迎回来') }} {{ Auth::user()->name }} !
<html>
    <body>
    </div>
    <div class="container pt-lg pb-300">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-10">
                    <div class="row row-grid">
                    <div class="card-body py-5">
                                        <h6 class="text-primary text-uppercase">云服务器</h6>
                                        <p class="description mt-3">一旦您单击部署，{{ env('APP_NAME') }}的自动化系统将在60秒内完成在您选择的数据中心进行部署</p>
                                    
                                        <a href="http://127.0.0.1:8000/buy/server" class="btn btn-primary mt-4">订购产品</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="container pt-lg pb-300">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-10">
                    <div class="row row-grid">
                    <div class="card-body py-5">
                                        <h6 class="text-primary text-uppercase">虚拟主机</h6>
                                        <p class="description mt-3">低成本的网站建设{{ env('APP_NAME') }}提供洛杉矶，香港，纽约和日本高性能稳定虚拟主机

</p>
                                    
                                        <a href="http://127.0.0.1:8000/buy/vhost" class="btn btn-primary mt-4">订购产品</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <section class="section section-lg bg-gradient-default">
            <div class="container pt-lg pb-300">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-10">
                    <div class="row row-grid">
                    <div class="card-body py-5">
                                        <h6 class="text-primary text-uppercase">专用服务器</h6>
                                        <p class="description mt-3">使用{{ env('APP_NAME') }}自动化管理专用服务器资源比以往更容易。在几分钟内在全球部署自定义物理服务器</p>
                                    
                                        <a href="http://127.0.0.1:8000/buy/dedicated" class="btn btn-primary mt-4">订购产品</a>
                                    </div>
                                </div>
                            </div>
</body>
                    </html>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Core -->
<script src="{{asset('assets/jquery/dist/jquery.min.js')}}"></script>
<!-- Argon JS -->
<script src="{{asset('assets/js/argon.js?v=1.0.1')}}"></script>
@endsection
