<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Http;

class OrderResource extends JsonResource
{
    protected $status;
    protected $message;

    public function __construct($resource, $status = 'Success', $message = '')
    {
        parent::__construct($resource);
        $this->status = $status;
        $this->message = $message;
    }

    public function toArray($request)
    {
        if ($this->resource === null) {
            return [
                'status'  => $this->status,
                'message' => $this->message,
                'data'    => null
            ];
        }

        $customer_name = 'Unknown Customer';
        $menu_name = 'Unknown Menu';

        // Ambil data customer
        try {
            $customerResponse = Http::get(env('CUSTOMER_SERVICE_URL') . '/api/customers/' . $this->customer_id);
            if ($customerResponse->successful()) {
                $customer = $customerResponse->json('data');
                $customer_name = $customer['customer_name'] ?? $customer_name;
            }
        } catch (\Exception $e) {
            $customer_name = 'Service Unavailable';
        }

        // Ambil data menu
        try {
            $menuResponse = Http::get(env('MENU_SERVICE_URL') . '/api/menus/' . $this->menu_id);
            if ($menuResponse->successful()) {
                $menu = $menuResponse->json('data');
                $menu_name = $menu['menu_name'] ?? $menu_name;
            }
        } catch (\Exception $e) {
            $menu_name = 'Service Unavailable';
        }

        return [
            'status'  => $this->status,
            'message' => $this->message,
            'data'    => [
                'id'            => $this->id,
                'customer_id'   => $this->customer_id,
                'customer_name' => $customer_name,
                'menu_id'       => $this->menu_id,
                'menu_name'     => $menu_name,
                'quantity'      => $this->quantity,
                'total_price'   => $this->total_price,
                'created_at'    => $this->created_at,
            ],
        ];
    }
}
