<div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-white shadow-sm sidebar" id="sidebar">
    <h1 class="bi bi-bootstrap text-primary d-flex my-4 justify-content-center"></h1>
    <div class="list-group rounded-0">
        <a href="#"
            class="list-group-item list-group-item-action active border-0 d-flex align-items-center">
            <span class="bi bi-border-all"></span>
            <span class="ml-2">Dashboard</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action border-0 align-items-center">
            <span class="bi bi-box"></span>
            <span class="ml-2">Products</span>
        </a>

        <button
            class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center collapsed"
            data-toggle="collapse" data-target="#sale-collapse" aria-expanded="false">
            <div>
                <span class="bi bi-person-circle"></span>
                <span class="ml-2">Tài Khoản</span>
            </div>
            <span class="bi bi-chevron-down small"></span>
        </button>
        <div class="collapse" id="sale-collapse" data-parent="#sidebar" style="">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Admin</a>
                <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Khách Hàng</a>
            </div>
        </div>

        <button
            class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center"
            data-toggle="collapse" data-target="#purchase-collapse" aria-expanded="true">
            <div>
                <span class="bi bi-cart-plus"></span>
                <span class="ml-2">Purchase</span>
            </div>
            <span class="bi bi-chevron-down small"></span>
        </button>
        <div class="collapse" id="purchase-collapse" data-parent="#sidebar" style="">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Sellers</a>
                <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Purchase Orders</a>
            </div>
        </div>
    </div>
</div>