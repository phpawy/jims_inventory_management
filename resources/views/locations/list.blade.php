@extends ('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Available Locations <small></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active ">
                <a href="{{route('locations.create')}}" class="btn btn-xs btn-primary" role="button">New location</a>
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">

        <div class="table-responsive">
            <table class="table table-hover order-column" id="locations">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Number of Products</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($locations AS $l)
                    <tr>
                        <td>{{$l->title}}</td>
                        <td></td>
                        <td>
                            <a href="{{route('locations.edit', ['id' => $l->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a href="{{route('locations.delete', ['id' => $l->id])}}"><i class="fa fa-times" aria-hidden="true"></i></a>
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
    $('#locations').DataTable();
});
</script>
@endsection