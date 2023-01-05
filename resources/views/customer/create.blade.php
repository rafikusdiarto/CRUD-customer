@extends('app')
@section('content')
    <div class="col-9 my-5">
        <div class="header ">
            <form method="POST" action="{{route('customer.store')}}">
                <div class="mb-3 row">
                    <label for="Customer Name" class="col-sm-2 col-form-label">Customer Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
    
                <div class="mb-3 row">
                    <label for="Phone Number" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="City" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
            
                <button class="btn btn-primary" type="submit">Add</button>
                <button class="btn btn-danger" type="submit">Back</button>
            </form>

        </div>

    </div>

@endsection
