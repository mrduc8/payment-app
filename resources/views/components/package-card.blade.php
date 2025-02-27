<label class="border rounded-md shadow-md p-4 cursor-pointer hover:bg-gray-100">
    <input type="radio" name="amount" value="{{ $package['price'] }}" class="hidden">
    <div class="relative">
        <img src="{{ asset('images/knb-icon.png') }}" alt="KNB" class="w-full h-24 object-cover">
    </div>
    <div class="mt-2 text-center">
        <p class="font-semibold">Gói {{ $package['KNB'] }} KNB</p>
        <p class="text-orange-500 font-bold">{{ number_format($package['price'], 0, ',', '.') }} VND</p>
    </div>
</label>
