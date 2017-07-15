<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li @if(in_array(\Request::route()->getName(), array('categories.list', 'categories.create', 'products.list'))) class="active" @endif>
            <a href="javascript:;" data-toggle="collapse" data-target="#products"><i class="fa fa-fw fa-arrows-v"></i> Products <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="products" @if(in_array(\Request::route()->getName(), array('categories.list','categories.create', 'products.list'))) class="" @else class="collapse" @endif>
                <li>
                    <a href="{{ route('categories.list') }}">Categories</a>
                </li>
                <li>
                    <a href="{{ route('products.list') }}">Products</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Suppliers</a>
        </li>
        <li>
            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Customers</a>
        </li>
        <li>
            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Locations</a>
        </li>
        <li>
            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Sales</a>
        </li>

    </ul>
</div>
<!-- /.navbar-collapse -->