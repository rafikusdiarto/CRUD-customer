@extends('app')
@section('content')
    <div class="col-9 my-5">
        <h2 class="my-3">Tambah Data Customer</h2>
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
                <button class="btn btn-warning" href="{{route('customer.index')}}" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                  </svg>Back</button>
            </form>

        </div>

    </div>

@endsection
