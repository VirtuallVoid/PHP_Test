<?php include("../Includes/header.php"); ?>

</head>
<body>
<main>
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"> <i class="fas fa-door-open"></i> Welcome To Our Site</h1>
        <div class="justify-content-center mt-5">
            <div class="row">
                <div class="col-md">
                    <?php buttonElement("view_product_id", "btn btn-secondary btn-lg","button","View product list", "view_product","dat-toggle='tooltip' data-placement='bottom' title='View Products' ");?>
                </div>

                <div class="col-md">
                    <?php buttonElement("add_product_id", "btn btn-secondary btn-lg","button","Add New Products", "add_product","dat-toggle='tooltip' data-placement='bottom' title='Add Products' ");?>

                </div>

            </div>
        </div>

    </div>
</main>
</body>
<?php include ("../Includes/footer.php"); ?>