@extends('layouts.app')

@section('title', 'Nạp tiền vào game')

@section('content')
<div class="row">
    <!-- Cột bên trái: Form nhập thông tin và chọn gói nạp -->
    <div class="col-md-8">
        <h3>Nạp tiền</h3>
        <form id="payment-form">
            @include('components.payment-form')
            @include('components.payment-packages')
            @include('components.payment-methods')

            <button type="submit" class="btn btn-success w-100 mt-3">Thanh toán ngay</button>
        </form>
    </div>

    <!-- Cột bên phải: Hiển thị thông tin đơn hàng -->
    <div class="col-md-4">
        @include('components.order-summary')
    </div>
</div>
@endsection
