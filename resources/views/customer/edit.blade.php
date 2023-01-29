@extends('app')
@section('content')
    <div class="col-9 my-5">
        <h2 class="my-3">Tambah Data Customer</h2>
        <div class="header ">
            @if ($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">gagal menambahkan data customer, {{$err}}</p>
            @endforeach    
            @endif
            <form method="POST" action="{{route('customer.update', $customer)}}">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="Customer Name" class="col-sm-2 col-form-label">Customer Name</label>
                    <div class="col-sm-10">
                    <input type="text" name="customer_name" class="form-control" value="{{old('customer_name', $customer->customer_name)}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Phone Number" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                    <input type="text" name="phone_number" class="form-control" value="{{old('phone_number', $customer->phone_number)}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                    <input type="text" name="address" class="form-control" value="{{old('address', $customer->address)}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="City" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10">
                    <input type="text" name="city" class="form-control" value="{{old('city', $customer->city)}}">
                    </div>
                </div>
                
                <button class="btn btn-primary" type="submit">Save</button>
                <a class="btn btn-warning" href="{{route('customer.index')}}" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                  </svg>Back</a>
            </form>

        </div>

    </div>

@endsection
