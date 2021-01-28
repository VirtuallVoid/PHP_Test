<?php include("../Includes/header.php"); ?>
<script type="text/javascript" src="../Scripts/productAdd.js"></script>

</head>
<body>
<main>
    <!-- Success Alert -->
    <div id="product_save_messages" role="alert" class="alert alert-success" style="display: none">
        <strong>Success!</strong> The Data has been saved successfully.
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <form id="product_registration" class="">
        <div class="ml-2 mr-2 mt-4 mb-4">
            <div class="row">
                <div class="col-md">
                    <h1>Product Add</h1>
                </div>
                <div class="col-md">
                    <?php buttonElement("save_product_id", "btn btn-success btn-default float-right", "submit", "Save", "save_product", "dat-toggle='tooltip' data-placement='bottom' title='Save Products' "); ?>
                </div>

            </div>
            <hr>
        </div>


        <div class="row">
            <div class="col-md-1">
                <label for="SKU_ID" class="float-right"> SKU </label>
            </div>

            <div class="col-md-3">
                <?php inputElement("SKU_ID", "SKU", "", "form-control"); ?>
            </div>

            <div id="SKU_messages" class="col-md-3">

            </div>
        </div>


        <div class="row">
            <div class="col-md-1">
                <label for="product_name_id" class="float-right"> Name </label>
            </div>

            <div class="col-md-3">
                <?php inputElement("product_name_id", "product_name", "", "form-control"); ?>
            </div>
            <div id="product_name_messages" class="col-md-3">

            </div>

        </div>


        <div class="row">
            <div class="col-md-1">
                <label for="product_price_id" class="float-right"> Price </label>
            </div>

            <div class="col-md-3">
                <?php inputElement("product_price_id", "product_price", "", "form-control"); ?>
            </div>

            <div id="product_price_messages" class="col-md-3">

            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-2">

                <select id="type-switcher_id" name="type-switcher" class="type-switcher float-right">
                    <option value="-1">Select Type</option>
                    <option value="DVD-disc">DVD-disc</option>
                    <option value="Book">Book</option>
                    <option value="Furniture">Furniture</option>
                </select>

            </div>
            <div id="type-switcher_messages" class="col-md-3">

            </div>
        </div>

        <div id="sub-form">

        </div>


    </form>

</main>

</body>

<?php include("../Includes/footer.php"); ?>
