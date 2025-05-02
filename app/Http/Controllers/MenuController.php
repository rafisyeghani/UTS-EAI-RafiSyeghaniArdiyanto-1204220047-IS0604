<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Http\Resources\MenuResource;
use App\Http\Resources\MenuCollection;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    // menampilkan seluruh data menu
    public function index()
    {
        $menus = Menu::all();
        return new MenuCollection($menus, 'Success', 'Daftar Menu berhasil ditampilkan');
    }

    // tambah data menu
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'menu_name' => 'required|string',
            'category' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'Failed',
                'message' => 'Validasi tidak berhasil',
                'errors' => $validator->errors()
            ], 422);
        }

        $menu = Menu::create($validator->validated());
        return response()->json([
            'status' => 'Success',
            'message' => 'Menu berhasil dibuat',
            'data' => new MenuResource($menu)
        ]);
    }

    // tampil menu berdasar ID menu
    public function show($id)
    {
        $menu = Menu::find($id);
        if (!$menu) {
            return response()->json([
                'status' => 'Error',
                'message' => 'Menu tidak ditemukan',
                'data' => null
            ], 404);
        }

        return response()->json([
            'status' => 'Success',
            'message' => 'Menu berhasil ditampilkan',
            'data' => new MenuResource($menu)
        ]);
    }

    // update data menu
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'menu_name' => 'required|string',
            'category' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'Failed',
                'message' => 'Validasi tidak berhasil',
                'errors' => $validator->errors()
            ], 422);
        }

        $menu = Menu::find($id);
        if (!$menu) {
            return response()->json([
                'status' => 'Error',
                'message' => 'Menu tidak ditemukan',
                'data' => null
            ], 404);
        }

        $menu->update($validator->validated());
        return response()->json([
            'status' => 'Success',
            'message' => 'Menu berhasil di update',
            'data' => new MenuResource($menu)
        ]);
    }

    // hapus data menu
    public function destroy($id)
    {
        $menu = Menu::find($id);
        if (!$menu) {
            return response()->json([
                'status' => 'Error',
                'message' => 'Menu tidak ditemukan',
                'data' => null
            ], 404);
        }

        $menu->delete();
        return response()->json([
            'status' => 'Success',
            'message' => 'Menu berhasil terhapus',
            'data' => null
        ]);
    }

    // rekom menu by budget
    public function recomByBudget(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'budget' => 'required|numeric|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'Failed',
                'message' => 'Validasi tidak berhasil',
                'errors' => $validator->errors()
            ], 422);
        }

        $budget = $request->input('budget');
        $menus = Menu::orderByDesc('price')->get();

        $recommendedMenus = [];
        $totalSpent = 0;

        foreach ($menus as $menu) {
            if ($totalSpent + $menu->price <= $budget) {
                $recommendedMenus[] = $menu;
                $totalSpent += $menu->price;
            }
        }

        return response()->json([
            'status' => 'Success',
            'message' => 'Rekomendasi menu berdasarkan budget',
            'budget_input' => $budget,
            'total_spent' => $totalSpent,
            'remaining_budget' => $budget - $totalSpent,
            'recommended_menus' => MenuResource::collection(collect($recommendedMenus))
        ]);
    }
}
