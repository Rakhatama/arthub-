@extends('layout.main')


@section('main')
<div class="container mt-4 mb-5 pt-5 pb-5">
    <div class="row">
        <div class="col-12">

            <div class="py-4">
            <h2>Transactions History</h2>
            </div>
        
            <table class="table table-striped">
            <thead>
                <tr>
                   <th>#</th>
                   <th>Email</th>
                   <th>Nama</th>
                   <th>Alamat</th>
                   <th>Order</th>
                   <th>Quantity</th>
                </tr>
                </thead>

                <tbody>
                @forelse ($checkouts as $checkout)
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$checkout->email}}</td>
                    <td>{{$checkout->nama}}</td>
                    <td>{{$checkout->alamat}}</td>
                    <td>{{$checkout->order}}</td>
                    <td>{{$checkout->qty}}</td>
                </tr>
                @empty
                <td colspan="6" class="text-center">No Transactions History</td>
                @endforelse
                </tbody>    
                </table>
        </div>
    </div>
</div>
@endsection