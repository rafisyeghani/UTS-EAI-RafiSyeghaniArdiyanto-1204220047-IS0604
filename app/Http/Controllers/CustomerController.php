<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Resources\CustomerResource;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    //menampilkan seluruh data customer
    public function index()
    {
        $customers = Customer::all();

        return new CustomerResource($customers, 'Success', 'Seluruh data Customer ditampilkan');
    }

    // membuat data customer
    public function store(Request $request)
    {
        // Validasi input customer
        $validator = Validator::make($request->all(), [
            'customer_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            // Mengembalikan response error jika validasi gagal
            return new CustomerResource(null, 'Failed', $validator->errors());
        }

        // Jika validasi berhasil, buat data customer
        $customer = Customer::create($validator->validated());

        // Kembalikan response sukses
        return new CustomerResource($customer, 'Success', 'Data Customer berhasil dibuat');
    }

    // menampilkan data Customer berdasaar ID
    public function show(string $id)
    {
        $customer = Customer::find($id);

        if (!$customer) {
            return new CustomerResource(null, 'Error', 'Data Customer tidak ditemukan');
        }

        return new CustomerResource($customer, 'Success', 'Data Customer ditampilkan');
    }

    // update data customer
    public function update(Request $request, string $id)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'customer_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            // Mengembalikan response error jika validasi gagal
            return new CustomerResource(null, 'Failed', $validator->errors());
        }

        $customer = Customer::find($id);

        if (!$customer) {
            return new CustomerResource(null, 'Error', 'Data Customer tidak ditemukan');
        }

        // Update customer jika data valid
        $customer->update($validator->validated());

        return new CustomerResource($customer, 'Success', 'Data Customer berhasil di update');
    }

    // menghapus data customer
    public function destroy(string $id)
    {
        $customer = Customer::find($id);

        if (!$customer) {
            return new CustomerResource(null, 'Error', 'Data Customer tidak ditemukan');
        }

        $customer->delete();

        return new CustomerResource(null, 'success', 'Data Customer berhasil dihapus');
    }


}
