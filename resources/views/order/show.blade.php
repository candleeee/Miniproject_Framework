@extends('layouts.app')
@section('content')

    <div class="container-sm mt-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-6">
                <div class="mb-3 text-center">
                    <i class="bi bi-card-list fs-1"></i>
                    <h4>Detail Order</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="kode" class="form-label">Kode Barang</label>
                        <h5>{{ $barang->Kode_Barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="nama" class="form-label">Nama Barang</label>
                        <h5>{{ $barang->Nama_Barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="harga" class="form-label">Harga Barang</label>
                        <h5>{{ $barang->Harga_Barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                        <h5>{{ $barang->Deskripsi_Barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="satuan" class="form-label">Satuan Barang</label>
                        <h5>{{ $barang->satuan->Nama_Satuan }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('checkout.index') }}" class="btn btn-warning btn-lg mt-3"><i
                                class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
