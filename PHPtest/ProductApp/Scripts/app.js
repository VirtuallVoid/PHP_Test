$(document).ready(function () {
    console.log('ready!');
    // redirections
    $("#add_product_id").click(function () {
        window.location.href = "http://localhost/PHPtest/ProductApp/Views/registration.php";
    });

    $("#view_product_id").click(function () {
        window.location.href = "http://localhost/PHPtest/ProductApp/Views/productList.php";
    });
});