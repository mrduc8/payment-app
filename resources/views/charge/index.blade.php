@extends('layouts.app')

@section('title', 'Nạp Thẻ')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2 gap-6">
        <!-- Form chọn gói nạp -->
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <form id="charge-store" method="post" action="{{ route('charge.store') }}">
                @csrf
                @method('post')

                <div class="pb-4">
                    <x-input-label for="username" :value="('Nạp cho Tài khoản')" />
                    <x-text-input id="username" name="username" type="text" class="mt-1 block w-full"
                        :value="old('username', $user->username)" required readonly />
                </div>

                <div class="pb-4">
                    <x-input-label for="game_id" :value="('Chọn game nạp')" />
                    <x-select name="game_id" id="game_id" :options="$games" />
                </div>

                <div class="pb-4" id="server-container">
                    <x-input-label for="server_id" :value="('Chọn máy chủ')" />
                    <x-select name="server_id" id="server_id" />
                </div>

                <div class="pb-4">
                    <x-input-label :value="__('Chọn gói nạp')" />
                    <div class="grid grid-cols-3 gap-4 mt-4">
                        @foreach ($packages as $package)
                            <x-package-card :package="$package" />
                        @endforeach
                    </div>
                </div>
            </form>
        </div>

        <!-- Thông tin đơn hàng -->
        <x-order-summary />
    </div>
</div>
<script>
    document.getElementById('game_id').addEventListener('change', function() {
        let gameId = this.value;
        let serverSelect = document.getElementById('server_id');
    
        if (gameId) {
            fetch(`/charge/servers/${gameId}`)
                .then(response => response.json())
                .then(data => {
                    serverSelect.innerHTML = '<option value="">--Chọn máy chủ--</option>';
                    data.forEach(server => {
                        serverSelect.innerHTML += `<option value="${server.id}">${server.name}</option>`;
                    });
                });
        } else {
            serverSelect.innerHTML = '<option value="">--Chọn máy chủ--</option>';
        }
    });
</script>
    
<x-popup />
@endsection
