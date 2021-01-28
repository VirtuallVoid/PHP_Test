$(document).ready(function () {
    $("select.type-switcher").change(function () {
        var switch_type = $(this).children("option:selected").val();
        //alert("You have selected the country - " + selectedCountry);

        let template = "";
        switch (switch_type) {
            case "DVD-disc": {
                template += `
                   <div class="row">
                     <div class="col-md-1">
                       <label for="DVD_MB_id" class="float-right"> Size </label>
                     </div>

                    <div class="col-md-3">
                         <input type="text" id="DVD_MB_id" name="DVD_MB" value="" autocomplete="off" class="form-control" >
                    </div>
                    
                    <div id="DVD_MB_messages" class="col-md-3">

                    </div>
                   </div>
                   
                   <div class="row">
                     <div class="col-md-1"></div>
                     <div class="col-md-3">
                       <p class="ml-1"> Please Enter DVD Size In MB</p>
                     </div>     
                   </div>
                `;
                $('#type-switcher_messages').html(``);
                break;
            }
            case "Book": {
                template += `
                   <div class="row">
                     <div class="col-md-1">
                       <label for="book_weight_id" class="float-right"> Weight </label>
                     </div>

                    <div class="col-md-3">
                         <input type="text" id="book_weight_id" name="book_weight" value="" autocomplete="off" class="form-control" >
                    </div>
                    
                     <div id="book_weight_messages" class="col-md-3">

                    </div>
                   </div>
                   
                   <div class="row">
                     <div class="col-md-1"></div>
                     <div class="col-md-3">
                       <p class="ml-1"> Please Enter Book Weight In KG</p>
                     </div>     
                   </div>
                `;
                $('#type-switcher_messages').html(``);
                break;
            }
            case "Furniture": {
                template += `
                   <div class="row">
                     <div class="col-md-1">
                       <label for="fur_height_id" class="float-right"> Height </label>
                     </div>

                    <div class="col-md-3">
                         <input type="text" id="fur_height_id" name="fur_height" value="" autocomplete="off" class="form-control" >
                    </div>
                    
                     <div id="fur_height_messages" class="col-md-3">

                    </div>
                   </div>
                   
                   <div class="row">
                     <div class="col-md-1">
                       <label for="fur_width_id" class="float-right"> Width </label>
                     </div>

                    <div class="col-md-3">
                         <input type="text" id="fur_width_id" name="fur_width" value="" autocomplete="off" class="form-control" >
                    </div>
                    
                     <div id="fur_width_messages" class="col-md-3">

                    </div>
                   </div>
                   
                   <div class="row">
                     <div class="col-md-1">
                       <label for="fur_length_id" class="float-right"> Length </label>
                     </div>

                    <div class="col-md-3">
                         <input type="text" id="fur_length_id" name="fur_length" value="" autocomplete="off" class="form-control" >
                    </div>
                    
                     <div id="fur_length_messages" class="col-md-3">

                    </div>
                   </div>
                   
                   <div class="row">
                     <div class="col-md-1"></div>
                     <div class="col-md-3">
                       <p class="ml-1"> Please Enter Furniture Height, Width And Length </p>
                     </div>     
                   </div>
                `;
                $('#type-switcher_messages').html(``);
                break;
            }
            default: {
                $('#type-switcher_messages').html(`<h6 class="text-danger"> Please Select Product Type.  </h6>`);
                break;
            }

        }
        $('#sub-form').html(template);

    });

    //***************************************************
    function valid(text) {
        return typeof text !== 'undefined' && text !== null && text.length !== 0;
    }

    function isNumber(n) {
        return !isNaN(parseFloat(n)) && !isNaN(n - 0);
    }

    function cstmTrim(text) {
        return valid(text) ? text.trim() : null;
    }

    function validateProductForm(SKU, product_name, product_price, switch_type, DVD_MB, book_weight, fur_height, fur_width, fur_length) {
        let others = valid(SKU) && valid(product_name) && valid(product_price) && isNumber(product_price) &&
            valid(switch_type) && switch_type !== -1;
        let isDvd = false, isBook = false, isFur = false;

        if (switch_type === 'DVD-disc') {
            isDvd = valid(DVD_MB) && isNumber(DVD_MB);
            isBook = true;
            isFur = true;
        } else if (switch_type === 'Book') {
            isBook = valid(book_weight) && isNumber(book_weight);
            isDvd = true;
            isFur = true;
        } else {
            isFur = valid(fur_height) && isNumber(fur_height) && valid(fur_width) &&
                isNumber(fur_width) && valid(fur_length) && isNumber(fur_length);
            isDvd = true;
            isBook = true;
        }

        //creating error messages if something went wrong
        if (!others) {
            if (!valid(SKU))
                $('#SKU_messages').html(`<h6 class="text-danger"> SKU Field Can Not be Empty </h6>`);
            if (!valid(product_name))
                $('#product_name_messages').html(`<h6 class="text-danger"> Product Name Field Can Not be Empty </h6>`);
            if (!valid(product_price))
                $('#product_price_messages').html(`<h6 class="text-danger"> Product Price Field Can Not be Empty </h6>`);
            else if (!isNumber(product_price))
                $('#product_price_messages').html(`<h6 class="text-danger"> Please Enter Valid Price  </h6>`);
            if (switch_type === '-1')
                $('#type-switcher_messages').html(`<h6 class="text-danger"> Please Select Product Type.  </h6>`);
        }
        if (!isDvd) {
            if (!valid(DVD_MB))
                $('#DVD_MB_messages').html(`<h6 class="text-danger"> You Must Enter DVD Size ! </h6>`);
            else if (!isNumber(DVD_MB))
                $('#DVD_MB_messages').html(`<h6 class="text-danger"> Please Enter Valid Number Of Size. </h6>`);
        }

        if (!isBook) {
            if (!valid(book_weight))
                $('#book_weight_messages').html(`<h6 class="text-danger"> You Must Enter Book Weight ! </h6>`);
            else if (!isNumber(book_weight))
                $('#book_weight_messages').html(`<h6 class="text-danger"> Please Enter Valid Number Of Weight. </h6>`);
        }

        if (!isFur) {
            if (!valid(fur_height))
                $('#fur_height_messages').html(`<h6 class="text-danger"> You Must Enter Furniture Height ! </h6>`);
            else if (!isNumber(fur_height))
                $('#fur_height_messages').html(`<h6 class="text-danger"> Please Enter Valid Height. </h6>`);


            if (!valid(fur_width))
                $('#fur_width_messages').html(`<h6 class="text-danger"> You Must Enter Furniture Width ! </h6>`);
            else if (!isNumber(fur_width))
                $('#fur_width_messages').html(`<h6 class="text-danger"> Please Enter Valid Width </h6>`);


            if (!valid(fur_length))
                $('#fur_length_messages').html(`<h6 class="text-danger"> You Must Enter Furniture Length ! </h6>`);
            else if (!isNumber(fur_length))
                $('#fur_length_messages').html(`<h6 class="text-danger"> Please Enter Valid Length. </h6>`);

        }
        //empry messages
        if (valid(SKU))
            $('#SKU_messages').html(``);
        if (valid(product_name))
            $('#product_name_messages').html(``);
        if (valid(product_price) && isNumber(product_price))
            $('#product_price_messages').html(``);
        if (switch_type !== '-1')
            $('#type-switcher_messages').html(``);
        if (valid(DVD_MB) && isNumber(DVD_MB))
            $('#DVD_MB_messages').html(``);
        if (valid(book_weight) && isNumber(book_weight))
            $('#book_weight_messages').html(``);
        if (valid(fur_height) && isNumber(fur_height))
            $('#fur_height_messages').html(``);
        if (valid(fur_width) && isNumber(fur_width))
            $('#fur_width_messages').html(``);
        if (valid(fur_length) && isNumber(fur_length))
            $('#fur_length_messages').html(``);
        //end of messages
        //for testing purposes
        /*
        console.log("others: " + others);
        console.log("isDvd: " + isDvd);
        console.log("isBook: " + isBook);
        console.log("isFur: " + isFur);
        */
        return others && isDvd && isBook && isFur;
    }

    $('#product_registration').submit(e => {
        e.preventDefault();
        const productData = {
            SKU: cstmTrim($('#SKU_ID').val()),
            product_name: cstmTrim($('#product_name_id').val()),
            product_price: cstmTrim($('#product_price_id').val()),
            switch_type: cstmTrim($('#type-switcher_id :selected').val()),
            DVD_MB: cstmTrim($('#DVD_MB_id').val()),
            book_weight: cstmTrim($('#book_weight_id').val()),
            fur_height: cstmTrim($('#fur_height_id').val()),
            fur_width: cstmTrim($('#fur_width_id').val()),
            fur_length: cstmTrim($('#fur_length_id').val())
        };

        //test output in console
        /*
        console.log("SKU = %s", productData.SKU);
        console.log("product_name = %s", productData.product_name);
        console.log("product_price = %s", productData.product_price);
        console.log("switch_type = %s", productData.switch_type);
        console.log("DVD_MB = %s", productData.DVD_MB);
        console.log("book_weight = %s", productData.book_weight);
        console.log("fur_height = %s", productData.fur_height);
        console.log("fur_width = %s", productData.fur_width);
        console.log("fur_length = %s", productData.fur_length);
        */

        if (validateProductForm(productData.SKU, productData.product_name, productData.product_price, productData.switch_type,
            productData.DVD_MB, productData.book_weight, productData.fur_height, productData.fur_width, productData.fur_length)) {
            // console.log('inside front end validateProductForm');


            $.post("../Controllers/productAddController.php", productData, (response) => {
                console.log(response);
                $('#product_registration').trigger('reset');
                $('#sub-form').html(``);
                $('#product_save_messages').show();
                setTimeout(function () {
                    $('#product_save_messages').fadeOut('fast');
                }, 3000);
            });
        }
    });


});