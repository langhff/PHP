<div class="container">
    <div class="admin-bar">
        <div class="admin-bar-item">
            <a class="@routeactive('orders') admin-bar-link text-white text-uppercase text-bold text-13" href="{{ route('orders') }}">Orders</a>
        </div>
        <div class="admin-bar-item">
            <a class="@routeactive('categories.index') admin-bar-link text-white text-uppercase text-bold text-13" href="{{ route('categories.index') }}">Categories</a>
        </div>
        <div class="admin-bar-item">
            <a class="@routeactive('products.index') admin-bar-link text-white text-uppercase text-bold text-13" href="{{ route('products.index') }}">Products</a>
        </div>
    </div>
</div>
