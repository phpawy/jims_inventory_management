@extends ('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Create location <small></small>
        </h1>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form role="form" method="post" action="{{route('locations.create')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Location Name</label>
                <input class="form-control" name="title">
                <p class="help-block">Enter short descriptive name for the location.</p>
            </div>
            <button type="submit" class="btn btn-default">Save</button>
            <button type="reset" class="btn btn-default">Reset</button>

        </form>

    </div>
</div>
@endsection

@section('after-scripts')
@endsection