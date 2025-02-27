$(document).ready(function() {
    let selectedAmount = 0;

    // Xử lý chọn gói nạp
    $(".package").click(function() {
        $(".package").removeClass("active");
        $(this).addClass("active");
        selectedAmount = $(this).data("amount");
        $("#total-amount").text(selectedAmount.toLocaleString() + " VND");
    });

    // Gửi dữ liệu thanh toán
    $("#payment-form").submit(function(event) {
        event.preventDefault();
        alert("Gửi dữ liệu thanh toán...");
    });
});
