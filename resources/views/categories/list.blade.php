@extends ('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Available Product Categories <small></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active ">
                <a href="{{route('categories.create')}}" class="btn btn-xs btn-primary" role="button">New category</a>
                <a href="{{route('attributes.list')}}" class="btn btn-xs btn-primary" role="button">Attributes</a>
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">

        <div class="table-responsive">
            <table class="table table-hover order-column" id="categories">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Number of Products</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories AS $c)
                    <tr>
                        <td>{{$c->title}}</td>
                        <td>{{$c->products()->count()}}</td>
                        <td>
                            <a href="{{route('categories.edit', ['id' => $c->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a href="{{route('categories.delete', ['id' => $c->id])}}"><i class="fa fa-times" aria-hidden="true"></i></a>
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
    $('#categories').DataTable();
});
</script>
@endsection