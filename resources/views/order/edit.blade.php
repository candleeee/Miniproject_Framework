@extends('layouts.app')
@section('content')

    <div class="container-sm mt-5">
        <form action="{{ route('checkout.update', ['checkout' => $barang->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    @if ($errors->any())
                        {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div> --}}
                    @endif
                    <div class="mb-3 text-center">
                        <i class="bi bi-bag-check fs-1"></i>
                        <h4>Edit Order </h4>
                    </div>
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode Barang</label>
                        <input class="form-control @error('kode') is-invalid @enderror" type="text" id="kode" name="kode" class="form-control" value="{{ $errors->any() ? old('kode') : $barang->Kode_Barang }}">
                        @error('kode')
                                <div>{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Barang</label>
                        <input class="form-control @error('nama') is-invalid @enderror" type="text" id="nama" name="nama" class="form-control" value="{{ $errors->any() ? old('nama') : $barang->Nama_Barang }}">
                        @error('nama')
                        <div>{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Barang</label>
                        <input class="form-control @error('harga') is-invalid @enderror" type="harga" id="harga" name="harga" class="form-control" value="{{ $errors->any() ? old('harga') : $barang->Harga_Barang }}">
                            @error('harga')
                            <div>{{ $message }}</div>
                        @enderror
                        </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                        <input class="form-control @error('deskripsi') is-invalid @enderror" type="text" id="deskripsi" name="deskripsi" class="form-control" value="{{ $errors->any() ? old('deskripsibarang') : $barang->Deskripsi_Barang }}">
                        @error('deskripsi')
                        <div>{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="mb-3">
                        <label for="satuan" class="form-label">Satuan Barang</label>
                        <select name="satuan" id="satuan" class="form-select">
                            @php
                                $selected = '';
                                if ($errors->any()) {
                                    $selected = old('satuan');
                                } else {
                                    $selected = $barang->satuan_id;
                                }
                            @endphp
                            @foreach ($satuans as $satuan)
                                <option value="{{ $satuan->id }}" {{ $selected == $satuan->id ? 'selected' : '' }}>
                                    {{ $satuan->Kode_Satuan. ' - ' . $satuan->Nama_Satuan }}</option>
                            @endforeach
                            @error('satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('checkout.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-warning btn-lg mt-3"><i class="bi-check-circle me-2"></i>Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
