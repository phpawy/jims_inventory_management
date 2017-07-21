@extends ('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Edit customer <small>{{$customer->title}}</small>
        </h1>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form role="form" method="post" action="{{route('customers.edit', $customer->id)}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Customer Name</label>
                <input class="form-control" name="title" value="{{$customer->title}}">
            </div>
            <div class="form-group">
                <label>Supplier Code</label>
                <input class="form-control" name="code" value="{{$customer->code}}">
            </div>
            <div class="form-group">
                <label>Tax number</label>
                <input class="form-control" name="tax_number" value="{{$customer->tax_number}}">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input class="form-control" name="phone" value="{{$customer->phone}}">
            </div>
            <div class="form-group">
                <label>Fax</label>
                <input class="form-control" name="fax" value="{{$customer->fax}}">
            </div>
            <div class="form-group">
                <label>Website</label>
                <input class="form-control" name="website" value="{{$customer->website}}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" name="email" value="{{$customer->email}}">
            </div>
            <button type="submit" class="btn btn-default">Save</button>
            <button type="reset" class="btn btn-default">Reset</button>

        </form>

    </div>
</div>
@endsection

@section('after-scripts')
@endsection