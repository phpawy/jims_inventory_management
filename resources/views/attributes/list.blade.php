@extends ('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Available Product Attributes <small></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active ">
                <a href="{{route('attributes.create')}}" class="btn btn-xs btn-primary" role="button">New Attribute</a>
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">

        <div class="table-responsive">
            <table class="table table-hover order-column" id="attributes">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Catgeory</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($attributes AS $a)
                    <tr>
                        <td>{{$a->title}}</td>
                        <td>{{$a->category->title}}</td>
                        <td>
                            <a href="{{route('attributes.edit', ['id' => $a->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a href="{{route('attributes.delete', ['id' => $a->id])}}"><i class="fa fa-times" aria-hidden="true"></i></a>
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
    $('#attributes').DataTable();
});
</script>
@endsection