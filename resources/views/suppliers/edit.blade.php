@extends ('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Edit supplier <small>{{$supplier->title}}</small>
        </h1>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form role="form" method="post" action="{{route('suppliers.edit', $supplier->id)}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Supplier Name</label>
                <input class="form-control" name="title" value="{{$supplier->title}}">
            </div>
            <div class="form-group">
                <label>Supplier Code</label>
                <input class="form-control" name="code" value="{{$supplier->code}}">
            </div>
            <div class="form-group">
                <label>Tax number</label>
                <input class="form-control" name="tax_number" value="{{$supplier->tax_number}}">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input class="form-control" name="phone" value="{{$supplier->phone}}">
            </div>
            <div class="form-group">
                <label>Fax</label>
                <input class="form-control" name="fax" value="{{$supplier->fax}}">
            </div>
            <div class="form-group">
                <label>Website</label>
                <input class="form-control" name="website" value="{{$supplier->website}}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" name="email" value="{{$supplier->email}}">
            </div>
            <button type="submit" class="btn btn-default">Save</button>
            <button type="reset" class="btn btn-default">Reset</button>

        </form>

    </div>
</div>
@endsection

@section('after-scripts')
@endsection