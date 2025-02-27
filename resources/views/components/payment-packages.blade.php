<h4>Chọn gói nạp</h4>
<div class="row">
    @foreach([20000, 50000, 100000, 200000] as $amount)
        <div class="col-md-3">
            <button type="button" class="btn btn-outline-primary w-100 package" data-amount="{{ $amount }}">
                {{ number_format($amount) }} VND
            </button>
        </div>
    @endforeach
</div>
