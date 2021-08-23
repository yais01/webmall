@extends('layouts.app')


@section('content')

<h2>Checkout</h2>


<h3>Shipping Information</h3>

<form action="{{route('orders.store')}}" method="post">
    @csrf


    <div class="form-group">
        <label for="">Nama Lengkap</label>
        <input type="text" name="shipping_fullname" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Kecamatan</label>
        <input type="text" name="shipping_state" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Kota</label>
        <input type="text" name="shipping_city" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Kode Pos</label>
        <input type="number" name="shipping_zipcode" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Alamat Lengkap</label>
        <input type="text" name="shipping_address" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">No. HP</label>
        <input type="text" name="shipping_phone" id="" class="form-control">
    </div>

    <h4>Pilihan Pembayaran</h4>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" checked class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
            Cash on delivery

        </label>

    </div>
    <br>
    <h4>Pilih Kurir</h4>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" checked class="form-check-input" name="kurir" id="" value="kurir"> 
            Tomo (081227568777) <br>
            <input type="radio" checked class="form-check-input" name="kurir" id="" value="kurir">
            Sukandar (085241789512) <br>
            <input type="radio" checked class="form-check-input" name="kurir" id="" value="kurir">
            Sukri (085233737801)

        </label>

    </div>

    {{-- <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
            Paypal

        </label>

    </div> --}}


    <button type="submit" class="btn btn-primary mt-3">Pesan</button>


</form>


@endsection
