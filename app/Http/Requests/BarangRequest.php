<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'kode_barang' => 'required|unique:barangs,kode_barang',
        'nama_barang' => 'required',
        'harga_barang' => 'required|numeric',
        'deskripsi_barang' => 'required',
        'satuan_barang' => 'required',
        ];
    }
}
