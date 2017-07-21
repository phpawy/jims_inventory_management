@extends ('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Create Product Attribute <small></small>
        </h1>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form role="form" method="post" action="{{route('attributes.create')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Category</label>
                {{ Form::select('category_id', $categories , null,['class' => 'select2Class form-control']) }}

                <p class="help-block">Enter short descriptive name for the attribute.</p>
            </div>
            <div class="form-group">
                <label>Attribute Name</label>
                <input class="form-control" name="title">
                <p class="help-block">Enter short descriptive name for the attribute.</p>
            </div>
            <div class="form-group">
                <label>Attribute Type</label>
                {{ Form::select('type', [
                    'text'=>'Text',
                    'number'=>'Number',
                    'dropdown'=>'Drop Down List',
                        ] , null,['class' => 'select2Class form-control']) }}
            </div>
            <div class="form-group">
                <label>Attribute Master values</label>
                <input class="form-control" name="mastervalue">
                <p class="help-block">Enter comma delimted mastervalues for this attribute. for example: "medium, large, xlarge"</p>
            </div>


            <button type="submit" class="btn btn-default">Save</button>
            <button type="reset" class="btn btn-default">Reset</button>

        </form>

    </div>
</div>
@endsection

@section('after-scripts')
@endsection