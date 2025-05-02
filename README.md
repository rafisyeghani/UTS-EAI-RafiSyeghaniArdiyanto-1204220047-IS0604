# Project: CustomerService
Layanan Customer service

## End-point: List Customer
Endpoint untuk mengambil seluruh data Customer
### Method: GET
>```
>{{customer_url}}/api/customers
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Seluruh data Customer ditampilkan",
    "data": [
        {
            "id": 1,
            "customer_name": "Rafi Syeghani Ardiyanto",
            "email": "syeghanirafi@example.com",
            "phone": "085733257930",
            "address": "Jl. Ahmad Rois, Taman",
            "created_at": "2025-04-29T15:35:05.000000Z",
            "updated_at": "2025-04-29T15:58:09.000000Z"
        },
        {
            "id": 2,
            "customer_name": "Budi Santoso",
            "email": "budi@example.com",
            "phone": "082345678901",
            "address": "Jl. Durian No. 10",
            "created_at": "2025-04-29T15:35:05.000000Z",
            "updated_at": "2025-04-29T15:35:05.000000Z"
        },
        {
            "id": 3,
            "customer_name": "Citra Lestari",
            "email": "citra@example.com",
            "phone": "083456789012",
            "address": "Jl. Apel No. 12",
            "created_at": "2025-04-29T15:35:05.000000Z",
            "updated_at": "2025-04-29T15:35:05.000000Z"
        },
        {
            "id": 4,
            "customer_name": "Dodi Pranata",
            "email": "dodi@example.com",
            "phone": "084567890123",
            "address": "Jl. Pisang No. 8",
            "created_at": "2025-04-29T15:35:05.000000Z",
            "updated_at": "2025-04-29T15:35:05.000000Z"
        },
        {
            "id": 5,
            "customer_name": "Eka Putri",
            "email": "eka@example.com",
            "phone": "085678901234",
            "address": "Jl. Semangka No. 3",
            "created_at": "2025-04-29T15:35:05.000000Z",
            "updated_at": "2025-04-29T15:35:05.000000Z"
        },
        {
            "id": 9,
            "customer_name": "Samson Betawi",
            "email": "Sbs@example.com",
            "phone": "081234522199",
            "address": "Jl Menuju Surga, No 21",
            "created_at": "2025-04-29T15:50:32.000000Z",
            "updated_at": "2025-04-29T15:50:32.000000Z"
        },
        {
            "id": 11,
            "customer_name": "Adzanil Rachmadhi Putra, S.Kom., M.Kom",
            "email": "Arx@example.com",
            "phone": "0812345678910",
            "address": "Jl.Ketintang, Wonokromo",
            "created_at": "2025-05-01T14:59:10.000000Z",
            "updated_at": "2025-05-01T14:59:10.000000Z"
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Get Customer by ID
Endpoint untuk mengambil data customer berdasarkan ID customer
### Method: GET
>```
>{{customer_url}}/api/customers/1
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Data Customer ditampilkan",
    "data": {
        "id": 1,
        "customer_name": "Rafi Syeghani Ardiyanto",
        "email": "syeghanirafi@example.com",
        "phone": "085733257930",
        "address": "Jl. Ahmad Rois, Taman",
        "created_at": "2025-04-29T15:35:05.000000Z",
        "updated_at": "2025-04-29T15:58:09.000000Z"
    }
}
```

### Response: 200
```json
{
    "status": "Error",
    "message": "Data Customer tidak ditemukan",
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Create Customer
Endpoint untuk membuat data Customer
### Method: POST
>```
>{{customer_url}}/api/customers
>```
### Body (**raw**)

```json
{
    "customer_name": "",
    "email": "Gst@example.com",
    "phone": "081234500178",
    "address": "Jl Anggrek, No 78"
}

```

### Response: 201
```json
{
    "status": "Success",
    "message": "Data Customer berhasil dibuat",
    "data": {
        "customer_name": "Gustavo",
        "email": "Gst@example.com",
        "phone": "081234500178",
        "address": "Jl Anggrek, No 78",
        "updated_at": "2025-05-02T10:39:21.000000Z",
        "created_at": "2025-05-02T10:39:21.000000Z",
        "id": 16
    }
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": {
        "customer_name": [
            "The customer name field is required."
        ]
    },
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Update Customer
Endpoint untuk update data Customer
### Method: PUT
>```
>{{customer_url}}/api/customers/13
>```
### Body (**raw**)

```json
{
    "customer_name": "Dexter Morgan",
    "email": "DXT@gmail.com",
    "phone": "085733256666",
    "address": "Jl. Kamboja, Taman"
}

```

### Response: 200
```json
{
    "status": "Success",
    "message": "Data Customer berhasil di update",
    "data": {
        "id": 13,
        "customer_name": "Dexter Morgan",
        "email": "DXT@gmail.com",
        "phone": "085733256666",
        "address": "Jl. Kamboja, Taman",
        "created_at": "2025-05-02T08:07:54.000000Z",
        "updated_at": "2025-05-02T08:11:51.000000Z"
    }
}
```

### Response: 200
```json
{
    "status": "Failed",
    "message": {
        "customer_name": [
            "The customer name field is required."
        ]
    },
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Delete Customer
Endpoint untuk menghapus data Customer
### Method: DELETE
>```
>{{customer_url}}/api/customers/13
>```
### Response: 200
```json
{
    "status": "success",
    "message": "Data Customer berhasil dihapus",
    "data": null
}
```

### Response: 200
```json
{
    "status": "Error",
    "message": "Data Customer tidak ditemukan",
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃
_________________________________________________
Powered By: [postman-to-markdown](https://github.com/bautistaj/postman-to-markdown/)
