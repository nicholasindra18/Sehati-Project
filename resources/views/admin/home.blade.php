@extends('layouts.main')

@section('container')
  @include('components.admin-navbar')
  <div class="table">
    <table class="transaction-table">
      <thead>
        <tr>
          <th>Order Number</th>
          <th>Name</th>
          <th>Medicine Name</th>
          <th>Order Quantity</th>
          <th>Payment Time</th>
          <th>Status</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($transactions as $transaction)
          <tr>
            <td>{{ $transaction->transactionHeader->id }}</td>
            <td>{{ $transaction->transactionHeader->user->fullname }}</td>
            <td>{{ $transaction->obat->obat_name }}</td>
            <td>{{ $transaction->quantity }}</td>
            <td>{{ date('d M Y', strtotime($transaction->transactionHeader->transaction_date)) }}</td>
            @if ($transaction->transactionHeader->status->status_name === 'Ongoing')
              <td id="ongoing">{{ $transaction->transactionHeader->status->status_name }}</td>
            @elseif ($transaction->transactionHeader->status->status_name === 'Delivered')
              <td id="delivered">{{ $transaction->transactionHeader->status->status_name }}</td>
            @else
              <td id="finished">{{ $transaction->transactionHeader->status->status_name }}</td>
            @endif
            @if ($transaction->transactionHeader->status->status_name === 'Ongoing')
            <td>
              <form action="/admin" method="post">
                @method('put')
                @csrf
                <input type="hidden" name="transactionId" value="{{ $transaction->transactionHeader->id }}">
                <button type="submit">Update</button>
              </form>
            </td>
            @else
              <td><button style="display: none;">Update</button></td>
            @endif
          </tr>
        @endforeach
      </tbody>
    </table>
    @if (count($transactions) === 0)
      <h4 class="no-order-text">No Order Available</h4>
    @endif
  </div>
  <div class="add-obat">
    <h2>My Medicine:</h2>
    <a href="/admin/add-obat"><button>+ Add Medicine</button></a>
  </div>
  <div class="add-obat-products">
    <div class="all-products-container">
      @foreach ($obats as $obat)
          <div class="single-product-container">
            <a href="/admin/edit-obat/{{ $obat->id }}"><img src="{{ Storage::url($obat->obat_photo)}}" alt="gambar obat" width="307px" height="257px" class="img-single-obat"></a>
            <div class="single-product-name">{{ $obat->obat_name }}</div>
            <div class="single-product-desc">{{ $obat->excerpt }}</div>
            <a href="/admin/delete-obat/{{ $obat->id }}" class="delete-product"><img src="{{ asset('assets/Icon/Delete.png') }}" alt="Delete obat" width="18px" height="18px"></a>
          </div>
      @endforeach
    </div>
  </div>
  @include('components.footer')
@endsection