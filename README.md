# Project: OrderService

## End-point: Create Order
Endpoint untuk menambahkan data Order
### Method: POST
>```
>{{order_url}}/api/orders
>```
### Body (**raw**)

```json
{
    "customer_id" : 1,
    "menu_id" : 6,
    "quantity" : 2
}
```

### Response: 201
```json
{
    "status": "Success",
    "message": "Order berhasil dibuat",
    "data": {
        "id": 14,
        "customer_id": 1,
        "customer_name": "Rafi Syeghani Ardiyanto",
        "menu_id": 6,
        "menu_name": "Dimsum Mentai",
        "quantity": 2,
        "total_price": 60000,
        "created_at": "2025-05-02T09:04:14.000000Z"
    }
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": {
        "customer_id": [
            "The customer id field is required."
        ],
        "menu_id": [
            "The menu id field is required."
        ],
        "quantity": [
            "The quantity field is required."
        ]
    },
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: List Order
Endpoint untuk menampilkan seluruh data Order
### Method: GET
>```
>{{order_url}}/api/orders
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Daftar Order berhasil ditampilkan",
    "data": [
        {
            "status": 0,
            "message": "",
            "data": {
                "id": 2,
                "customer_id": 2,
                "customer_name": "Budi Santoso",
                "menu_id": 4,
                "menu_name": "Coca Cola",
                "quantity": 1,
                "total_price": 25000,
                "created_at": "2025-04-29T18:41:13.000000Z"
            }
        },
        {
            "status": 1,
            "message": "",
            "data": {
                "id": 3,
                "customer_id": 1,
                "customer_name": "Rafi Syeghani Ardiyanto",
                "menu_id": 5,
                "menu_name": "Nasi Goreng",
                "quantity": 2,
                "total_price": 40000,
                "created_at": "2025-04-29T18:41:13.000000Z"
            }
        },
        {
            "status": 2,
            "message": "",
            "data": {
                "id": 4,
                "customer_id": 1,
                "customer_name": "Rafi Syeghani Ardiyanto",
                "menu_id": 1,
                "menu_name": "Nasi Goreng",
                "quantity": 2,
                "total_price": 40000,
                "created_at": "2025-04-30T03:56:11.000000Z"
            }
        },
        {
            "status": 3,
            "message": "",
            "data": {
                "id": 5,
                "customer_id": 1,
                "customer_name": "Rafi Syeghani Ardiyanto",
                "menu_id": 2,
                "menu_name": "Nasi Bakar",
                "quantity": 2,
                "total_price": 30000,
                "created_at": "2025-04-30T04:02:08.000000Z"
            }
        },
        {
            "status": 4,
            "message": "",
            "data": {
                "id": 6,
                "customer_id": 1,
                "customer_name": "Rafi Syeghani Ardiyanto",
                "menu_id": 1,
                "menu_name": "Nasi Goreng",
                "quantity": 2,
                "total_price": 40000,
                "created_at": "2025-04-30T04:05:48.000000Z"
            }
        },
        {
            "status": 5,
            "message": "",
            "data": {
                "id": 7,
                "customer_id": 2,
                "customer_name": "Budi Santoso",
                "menu_id": 1,
                "menu_name": "Nasi Goreng",
                "quantity": 2,
                "total_price": 40000,
                "created_at": "2025-04-30T04:10:18.000000Z"
            }
        },
        {
            "status": 6,
            "message": "",
            "data": {
                "id": 8,
                "customer_id": 1,
                "customer_name": "Rafi Syeghani Ardiyanto",
                "menu_id": 6,
                "menu_name": "Dimsum Mentai",
                "quantity": 2,
                "total_price": 60000,
                "created_at": "2025-04-30T04:11:47.000000Z"
            }
        },
        {
            "status": 7,
            "message": "",
            "data": {
                "id": 10,
                "customer_id": 2,
                "customer_name": "Budi Santoso",
                "menu_id": 8,
                "menu_name": "Es Jeruk Tawar",
                "quantity": 2,
                "total_price": 8000,
                "created_at": "2025-04-30T15:40:31.000000Z"
            }
        },
        {
            "status": 8,
            "message": "",
            "data": {
                "id": 11,
                "customer_id": 1,
                "customer_name": "Rafi Syeghani Ardiyanto",
                "menu_id": 1,
                "menu_name": "Nasi Goreng",
                "quantity": 4,
                "total_price": 80000,
                "created_at": "2025-05-02T08:43:15.000000Z"
            }
        },
        {
            "status": 9,
            "message": "",
            "data": {
                "id": 13,
                "customer_id": 1,
                "customer_name": "Rafi Syeghani Ardiyanto",
                "menu_id": 6,
                "menu_name": "Dimsum Mentai",
                "quantity": 1,
                "total_price": 30000,
                "created_at": "2025-05-02T09:04:04.000000Z"
            }
        },
        {
            "status": 10,
            "message": "",
            "data": {
                "id": 14,
                "customer_id": 1,
                "customer_name": "Rafi Syeghani Ardiyanto",
                "menu_id": 6,
                "menu_name": "Dimsum Mentai",
                "quantity": 2,
                "total_price": 60000,
                "created_at": "2025-05-02T09:04:14.000000Z"
            }
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Get Order by ID
Endpoint untuk menampilkan order berdasarkan ID
### Method: GET
>```
>{{order_url}}/api/orders/6
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Order berhasil ditemukan",
    "data": {
        "id": 6,
        "customer_id": 1,
        "customer_name": "Rafi Syeghani Ardiyanto",
        "menu_id": 1,
        "menu_name": "Nasi Goreng",
        "quantity": 2,
        "total_price": 40000,
        "created_at": "2025-04-30T04:05:48.000000Z"
    }
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": "Order tidak tersedia",
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Delete Order
Endpoint untuk menghapus data Order
### Method: DELETE
>```
>{{order_url}}/api/orders/12
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Order berhasil dihapus",
    "data": null
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": "Order tidak ditemukan",
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: History Order by Customer ID
Endpoint untuk menampilkan history Order by Customer ID
### Method: GET
>```
>{{order_url}}/api/orders/customer/1
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Data Order berdasarkan Customer",
    "data": [
        {
            "status": 0,
            "message": "",
            "data": {
                "id": 3,
                "customer_id": 1,
                "customer_name": "Rafi Syeghani Ardiyanto",
                "menu_id": 5,
                "menu_name": "Nasi Goreng",
                "quantity": 2,
                "total_price": 40000,
                "created_at": "2025-04-29T18:41:13.000000Z"
            }
        },
        {
            "status": 1,
            "message": "",
            "data": {
                "id": 4,
                "customer_id": 1,
                "customer_name": "Rafi Syeghani Ardiyanto",
                "menu_id": 1,
                "menu_name": "Nasi Goreng",
                "quantity": 2,
                "total_price": 40000,
                "created_at": "2025-04-30T03:56:11.000000Z"
            }
        },
        {
            "status": 2,
            "message": "",
            "data": {
                "id": 5,
                "customer_id": 1,
                "customer_name": "Rafi Syeghani Ardiyanto",
                "menu_id": 2,
                "menu_name": "Nasi Bakar",
                "quantity": 2,
                "total_price": 30000,
                "created_at": "2025-04-30T04:02:08.000000Z"
            }
        },
        {
            "status": 3,
            "message": "",
            "data": {
                "id": 6,
                "customer_id": 1,
                "customer_name": "Rafi Syeghani Ardiyanto",
                "menu_id": 1,
                "menu_name": "Nasi Goreng",
                "quantity": 2,
                "total_price": 40000,
                "created_at": "2025-04-30T04:05:48.000000Z"
            }
        },
        {
            "status": 4,
            "message": "",
            "data": {
                "id": 8,
                "customer_id": 1,
                "customer_name": "Rafi Syeghani Ardiyanto",
                "menu_id": 6,
                "menu_name": "Dimsum Mentai",
                "quantity": 2,
                "total_price": 60000,
                "created_at": "2025-04-30T04:11:47.000000Z"
            }
        }
    ]
}
```

### Response: 200
```json
{
    "status": "Success",
    "message": "Data Order berdasarkan Customer",
    "data": []
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃
_________________________________________________
Link : [Documentation-OrderService](https://documenter.getpostman.com/view/44220904/2sB2j4frCp)
