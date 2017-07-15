@extends ('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Available Products <small></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active ">
                <a href="{{route('products.create')}}" class="btn btn-xs btn-primary" role="button">New Product</a>
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">

        <div class="table-responsive">
            <table class="table table-hover order-column" id="products">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products AS $p)
                    <tr>
                        <td>{{$p->title}}</td>
                        <td>{{$p->category()->title}}</td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('after-scripts')
<script>
$(document).ready(function(){
    $('#products').DataTable();
});
</script>
@endsection