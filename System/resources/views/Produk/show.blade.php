@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Detail Data Produk</b>
                </div>
                <div class="card-body">
                    <h4>{{$produk->nama}}</h4>
                    <hr>
                    <p>
                        Rp. {{($produk->harga)}} |
                        Stok : {{$produk->stok}}
                    </p>
                    <p>
                        {!! nl2br($produk->deskripsi) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
