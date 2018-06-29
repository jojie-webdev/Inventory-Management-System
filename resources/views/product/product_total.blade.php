<div class="row"> 
    <div class="col-md-6"><h2>Products</h2></div>
    <div class="col-md-6">
        <div class="row">
            <!-- GET TOTAL PRODUCT -->
            <div class="col-md-6 total-product">
                <div class="Laptop">
                    <span class="item-title">Laptop/s:</span>
                    &nbsp;
                    <span class="item-total">
                        {{App\Product::getTotalLaptop()}}
                    </span>
                </div>
                <div class="Cellphone">
                    <span class="item-title">Cellphone/s:</span>
                    &nbsp;
                    <span class="item-total">
                        {{App\Product::getTotalCellphone()}}
                    </span>
                </div>
            </div>
            
            <!-- GET TOTAL PRICE -->
            <div class="col-md-6 total-price">
                <div class="Laptop">
                    <span class="item-title">Laptop/s:
                        &nbsp;
                        <span class="item-total">
                            <span>&#8369;</span> {{App\Product::getTotalPriceLaptop()}}
                        </span>
                    </span>
                </div>
                <div class="Laptop">
                    <span class="item-title">Cellphone/s:
                        &nbsp;
                        <span class="item-total">
                            <span>&#8369;</span> {{App\Product::getTotalPriceCellphone()}}
                        </span>
                    </span>
                </div>
            </div>
            
        </div>
        <hr>
        <span class="item-title">Total Product:</span>
        &nbsp;
        <span class="item-total">
            {{App\Product::getTotalProduct()}} units
        </span>

        <span class="item-title pull-right">Total Price:
            &nbsp;
            <span class="item-total">
                <span>&#8369;</span> {{App\Product::getTotalPrice()}}
            </span>
        </span>
    </div> 
</div>
<hr>