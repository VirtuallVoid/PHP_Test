$(document).ready(function () {
    fetchProducts();

    $('#product_list').submit(e => {
        e.preventDefault();
        //let productIDArray = new Array();
        //let productTypeIDArray = new Array();
         let productIDArray = new Array();
         let dvdIDArray = new Array();
         let bookIDArray = new Array();
         let furnitureIDArray = new Array();
        $('.myBox:checked').each(function () {
            let elem = $(this)[0].parentElement;
            //let temp = $(elem).find('.productID').val();
            //console.log(elem);
            productIDArray.push($(elem).find('.productID').val());
            let prodType = $(elem).find('.product_type').val();
            switch (prodType) {
                case 'DVD':{
                    dvdIDArray.push($(elem).find('.dvdID').val());
                    break;
                }
                case 'Book':{
                    bookIDArray.push($(elem).find('.bookID').val());
                    break;
                }
                default:{
                    furnitureIDArray.push($(elem).find('.furnitureID').val());
                    break;
                }
            }

        });
        if (productIDArray.length !== 0) {
            // console.log(productIDArray);

            if(confirm('Are you sure you want to delete it?')) {
                $.ajax({
                    url: '../Controllers/productDeleteController.php',
                    type: 'POST',
                    data: {productIDArray, dvdIDArray, bookIDArray, furnitureIDArray},
                    success: function (response) {
                        console.log(response);
                        $('#product_delete_messages').show();
                        setTimeout(function(){
                            $('#product_delete_messages').fadeOut();
                        }, 3000);
                        fetchProducts();
                    }
                });
            }
        }
    });

    function fetchProducts() {
        $.ajax({
            url: '../Controllers/productListController.php',
            type: 'POST',
            success: function (response) {
                //console.log(response);

                const cont = JSON.parse(response);
                let template = ``, subElement = ``, ct = 1, colLimit = 4;
                cont.forEach(item => {
                    subElement = (ct === 1) ? `<tr>` : ``;
                    subElement += `
                               <td>
                               <fieldset class="border p-2" style="border: solid 2px !important"> 
                               <div class="form-check">
                                    <input type="checkbox"  class="form-check-input myBox" >
                                    <label class="form-check-label" ></label>
                                    <input type="hidden" class="productID" value="${item.productID}">
                                    <input type="hidden" class="product_type" value="${item.product_type}">
                                    <input type="hidden" class="dvdID" value="${item.dvdID}">
                                    <input type="hidden" class="bookID" value="${item.bookID}">
                                    <input type="hidden" class="furnitureID" value="${item.furnitureID}">
                               </div>
                                 <div class="ml-5">
                                   <p>${item.SKU}</p>
                                   <p>${item.product_name}</p>
                                   <p>${item.product_price} $</p>
                                   <p>${item.info} </p>
                                  </div>
                             </fieldset>
                            </td>
                      `;


                    if (ct === colLimit)
                        subElement += `
                            </tr>
                        `;
                    template += subElement;
                    if (ct === colLimit)
                        ct = 0;

                    ct++;
                });
                $("#product_list_tbl tbody").html(template);
            },
            error: function (err) {
                console.error(err);
            }
        });
    }
});