@extends ('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Edit Product Category <small>{{$category->title}}</small>
        </h1>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form role="form" method="post" action="{{route('categories.edit', $category->id)}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Category Name</label>
                <input class="form-control" name="title" value="{{$category->title}}">
                <p class="help-block">Enter short descriptive name for the category.</p>
            </div>
            <button type="submit" class="btn btn-default">Update</button>
            <button type="reset" class="btn btn-default">Reset</button>

        </form>

    </div>
</div>
@endsection

@section('after-scripts')
@endsection