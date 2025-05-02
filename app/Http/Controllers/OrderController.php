<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use App\Models\Order;
use App\Http\Resources\OrderResource;
use App\Http\Resources\OrderCollection;

class OrderController extends Controller
{
    // Menampilkan seluruh daftar order
    public function index()
    {
        $orders = Order::all();
        return new OrderCollection($orders, 'Success', 'Daftar Order berhasil ditampilkan');
    }

    // menambahkan order
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'customer_id' => 'required|integer',
            'menu_id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return new OrderResource(null, 'Failed', $validator->errors());
        }

        // Cek customer dari CustomerService
        try {
            $customerResponse = Http::get(env('CUSTOMER_SERVICE_URL') . '/api/customers/' . $request->customer_id);
            if ($customerResponse->failed()) {
                return new OrderResource(null, 'Failed', 'Customer tidak ditemukan');
            }
        } catch (\Exception $e) {
            return new OrderResource(null, 'Failed', 'Layanan CustomerService tidak tersedia');
        }

        // Cek menu dari MenuService
        try {
            $menuResponse = Http::get(env('MENU_SERVICE_URL') . '/api/menus/' . $request->menu_id);
            if ($menuResponse->failed()) {
                return new OrderResource(null, 'Failed', 'Menu tidak tersedia');
            }
        } catch (\Exception $e) {
            return new OrderResource(null, 'Failed', 'Layanan MenuService tidak tersedia');
        }

        $menu = $menuResponse->json('data');
        $totalPrice = $menu['price'] * $request->quantity;

        // Buat Order
        $order = Order::create([
            'customer_id' => $request->customer_id,
            'menu_id' => $request->menu_id,
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
        ]);

        return new OrderResource($order, 'Success', 'Order berhasil dibuat');
    }

    // menampilkan order berdasara ID
    public function show($id)
    {
        $order = Order::find($id);
        if (!$order) {
            return new OrderResource(null, 'Failed', 'Order tidak tersedia');
        }

        return new OrderResource($order, 'Success', 'Order berhasil ditemukan');
    }

    // menghapus data order berdasarkan ID
    public function destroy($id)
    {
        $order = Order::find($id);
        if (!$order) {
            return new OrderResource(null, 'Failed', 'Order tidak ditemukan');
        }

        $order->delete();
        return new OrderResource(null, 'Success', 'Order berhasil dihapus');
    }

    // mengambil history order berdasar Customer ID
    public function getOrdersByCustomer($customer_id)
    {
        $orders = Order::where('customer_id', $customer_id)->get();

        return new OrderCollection($orders, 'Success', 'Data Order berdasarkan Customer');
    }

}
