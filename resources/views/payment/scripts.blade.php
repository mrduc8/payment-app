<script>
    document.addEventListener("DOMContentLoaded", function() {
        const packageLabels = document.querySelectorAll("label.cursor-pointer");
        const totalPriceElement = document.getElementById("total-price");
    
        packageLabels.forEach(label => {
            label.addEventListener("click", function() {
                totalPriceElement.textContent = new Intl.NumberFormat('vi-VN').format(this.querySelector("input").value) + " VND";
            });
        });
    });
    </script>
    