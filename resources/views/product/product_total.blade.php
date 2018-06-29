<div class="row product"> 
    <div class="col-md-6"><h2>Products</h2></div>
    <div class="col-md-6">
        <div>
            <span class="item-title">Laptop/s:</span>
            &nbsp;
            <span class="item-total">
                {{App\Product::getTotalLaptop()}}
            </span>
        </div>
        <div>
            <span class="item-title">Cellphone/s:</span>
            &nbsp;
            <span class="item-total">
                {{App\Product::getTotalCellphone()}}
            </span>
        </div>
        <hr>
        <span class="item-title">Total Product:</span>
        &nbsp;
        <span class="item-total">
            {{App\Product::getTotalProduct()}}
        </span>
    </div> 
</div>