@extends('app')
@section('content')
  
  <body>
    <div class="col-3 mt-5">
      <form class="d-flex" role="search">
        <input class="form-control me-2" name="q" value="{{$q}}" type="search" placeholder="Cari nama..." aria-label="Search">
        <button class="btn btn-primary me-2" type="submit">Search</button>
        
        
      </form>
    </div>

    <div class="container my-5">
        <div class="card">
            <div class="card-body table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Phone Number</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1?>
                        @foreach ($customers as $customer)
                            
                        <tr>
                            <th>{{$no++}}</th>
                            <td>{{$customer -> customer_name}}</td>
                            <td>{{$customer -> phone_number}}</td>
                            <td>{{$customer -> address}}</td>
                            <td>{{$customer -> city}}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        
                        @endforeach

                    </tbody>
                  </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

  </body>
@endsection
