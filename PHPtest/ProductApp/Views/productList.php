<?php include("../Includes/header.php"); ?>
<script type="text/javascript" src="../Scripts/productList.js"></script>
</head>
<body>
<main>
    <form id="product_list" class="">
        <div class="alert alert-success" role="alert" id="product_delete_messages" style="display: none">
            Data has been deleted successfully !
        </div>
        <div class="ml-2 mr-2 mt-4 mb-4">
            <div class="row">
                <div class="col-md">
                    <h1>Product List</h1>
                </div>

                <div class="col-md">
                    <div class="row">
                        <div class="col-md-9">
                            <select id="type-switcher_id" name="type-switcher" class="type-switcher float-right">
                                <option value="mass_delete"> Mass Delete Action</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <?php buttonElement("apply_id", "btn btn-success btn-default float-right", "submit", "Apply", "apply_product", "dat-toggle='tooltip' data-placement='bottom' title='Apply Products' "); ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>

        <div class="container">
            <table id="product_list_tbl" class="table">
                <tbody>

                </tbody>
            </table>
        </div>
    </form>
</main>

</body>

<?php include("../Includes/footer.php"); ?>
