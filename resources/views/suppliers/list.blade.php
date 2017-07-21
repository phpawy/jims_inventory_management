@extends ('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Available Suppliers <small></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active ">
                <a href="{{route('suppliers.create')}}" class="btn btn-xs btn-primary" role="button">New supplier</a>
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">

        <div class="table-responsive">
            <table class="table table-hover order-column" id="suppliers">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Number of Products</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($suppliers AS $s)
                    <tr>
                        <td>{{$s->title}}</td>
                        <td></td>
                        <td>
                            <a href="{{route('suppliers.edit', ['id' => $s->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a href="{{route('suppliers.delete', ['id' => $s->id])}}"><i class="fa fa-times" aria-hidden="true"></i></a>
                        </td>
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
    $('#suppliers').DataTable();
});
</script>
@endsection