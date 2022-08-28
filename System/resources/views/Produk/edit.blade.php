@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <b>Tambah Data Produk</b>
                </div>
                <form action="{{url('produk', $produk->id)}}" method="post">
                @csrf
                @method("PUT")
                <div  class="card-body">
                    <div>
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$produk->nama}}">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <label for="" class="control-label">Harga</label>
                                <input type="text" class="form-control" name="harga" value="{{$produk->harga}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label for="" class="control-label">Stok</label>
                                <input type="text" class="form-control" name="stok" value="{{$produk->stok}}">
                            </div>
                         </div>
                    </div>
                    <div>
                        <label for="" class="control-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
                    </div>
                </div>
                <button class="btn btn-dark float-right"><i class="fa - fa-save">Simpan</i></button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
