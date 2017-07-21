@extends ('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Edit Location <small>{{$location->title}}</small>
        </h1>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form role="form" method="post" action="{{route('locations.edit', $location->id)}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Location Name</label>
                <input class="form-control" name="title" value="{{$location->title}}">
                <p class="help-block">Enter short descriptive name for the location.</p>
            </div>
            <button type="submit" class="btn btn-default">Update</button>
            <button type="reset" class="btn btn-default">Reset</button>

        </form>

    </div>
</div>
@endsection

@section('after-scripts')
@endsection