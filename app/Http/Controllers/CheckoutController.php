<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Satuan;
class CheckoutController extends Controller
{
    public function index()
    {
        $pageTitle = 'Checkout';
        // $checkouts = DB::table('checkouts')->get();
        // return view('order.Checkoutindex', compact('pageTitle', 'checkouts'));
        $barangs = Barang::all();

        // ELOQUENT
        return view('order.index', [
            'pageTitle' => $pageTitle,
            'barang' => $barangs

        ]);
    }

    public function create()
    {
        $pageTitle = 'Create Order';
        $satuans = Satuan::all();
        return view('order.create', compact('pageTitle','satuans'));
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'kode.unique'=> 'Kode barang sudah digunakan',
            'numeric'=> 'Hanya bisa diisi dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'kode' => 'required|unique:barangs,Kode_Barang',
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            // 'satuan' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //kiri format database - kanan nama form
        $barang = new Barang;
        $barang->Kode_Barang = $request->kode;
        $barang->Nama_Barang = $request->nama;
        $barang->Harga_Barang = $request->harga;
        $barang->Deskripsi_Barang = $request->deskripsi;
        $barang->satuan_id= $request->satuan;
        $barang->save();

        return redirect()->route('checkout.index');
    }

    public function show($id)
    {
        $pageTitle = 'Show';
        $barang = Barang::find($id);
        return view('order.show', compact('pageTitle','barang'));
    }

    public function edit($id)
    {
        $pageTitle = 'Edit Order';
        //kiri format database - kanan nama form
        $satuans = Satuan::all();
        $barang = Barang::find($id);
        return view('order.edit', compact('pageTitle', 'satuans','barang'));
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'kode.unique' => 'Kode barang sudah ada',
            'numeric'=> 'Hanya bisa diisi dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'kode' => 'required|unique:barangs,Kode_Barang',
            'nama' => 'required',
            'harga' =>'required|numeric',
            'deskripsi' => 'required',
        ],$messages);

        $validator->after(function ($validator) use ($request, $id) {
            $value = $request->input('kode');
            $count = DB::table('barangs')
                ->where('Kode_Barang', $value)
                ->where('id', '<>', $id)
                ->count();

            if ($count > 0) {
                $validator->errors()->add('kodebarang', 'Kode Barang ini sudah dipakai.');
            }
        });

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //kiri format database - kanan nama form
        $barang = Barang::find($id);
        $barang->Kode_Barang = $request->kode;
        $barang->Nama_Barang = $request->nama;
        $barang->Harga_Barang = $request->harga;
        $barang->Deskripsi_Barang = $request->deskripsi;
        $barang->satuan_id= $request->satuan;
        $barang->save();

        return redirect()->route('checkout.index')->with('success', 'Order has been updated successfully.');
    }

    public function destroy($id)
    {
        // DB::table('checkouts')->where('id', $id)->delete();
        // return redirect()->route('checkout.index')->with('success', 'Order has been deleted successfully.');
        Barang::find($id)->delete();

        return redirect()->route('checkout.index');
    }
}
