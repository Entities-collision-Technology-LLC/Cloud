@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('验证您的邮箱地址') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('新的验证链接已发送到您的电子邮件地址。') }}
                        </div>
                    @endif

                    {{ __('在继续之前，请检查您的电子邮件以获取验证链接。') }}
                    {{ __('如果您没有收到电子邮件') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('再次发送') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
