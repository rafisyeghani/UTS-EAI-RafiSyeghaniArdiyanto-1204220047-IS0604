# Project: MenuService

## End-point: List Menu
Endpoint untuk menampilkan seluruh data Menu
### Method: GET
>```
>{{menu_url}}/api/menus
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Daftar Menu berhasil ditampilkan",
    "data": [
        {
            "id": 1,
            "menu_name": "Nasi Goreng",
            "category": "Makanan",
            "price": 20000
        },
        {
            "id": 2,
            "menu_name": "Nasi Bakar",
            "category": "Makanan",
            "price": 15000
        },
        {
            "id": 3,
            "menu_name": "Es Teh",
            "category": "Minuman",
            "price": 5000
        },
        {
            "id": 4,
            "menu_name": "Coca Cola",
            "category": "Minuman",
            "price": 10000
        },
        {
            "id": 5,
            "menu_name": "Nasi Goreng",
            "category": "Makanan",
            "price": 20000
        },
        {
            "id": 6,
            "menu_name": "Dimsum Mentai",
            "category": "Makanan",
            "price": 30000
        },
        {
            "id": 8,
            "menu_name": "Es Jeruk Tawar",
            "category": "Minuman",
            "price": 4500
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Get Menu by ID
Endpoint untuk menampilkan menu berdasarkan ID
### Method: GET
>```
>{{menu_url}}/api/menus/1
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Menu berhasil ditampilkan",
    "data": {
        "id": 1,
        "menu_name": "Nasi Goreng",
        "category": "Makanan",
        "price": 20000
    }
}
```

### Response: 404
```json
{
    "status": "Error",
    "message": "Menu tidak ditemukan",
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Create Menu
Endpoint untuk menambahkan Menu
### Method: POST
>```
>{{menu_url}}/api/menus
>```
### Body (**raw**)

```json
{
    "menu_name": "Kopi Kenangan",
    "category": "Minuman",
    "price": 19000
}

```

### Response: 200
```json
{
    "status": "Success",
    "message": "Menu berhasil dibuat",
    "data": {
        "id": 12,
        "menu_name": "Kopi Kenangan",
        "category": "Minuman",
        "price": 19000
    }
}
```

### Response: 422
```json
{
    "status": "Failed",
    "message": "Validasi tidak berhasil",
    "errors": {
        "menu_name": [
            "The menu name field is required."
        ]
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Update Menu
Endpoint untuk update data Menu
### Method: PUT
>```
>{{menu_url}}/api/menus/12
>```
### Body (**raw**)

```json
{
    "menu_name": "Kopi Kenangan Americano",
    "category": "Minuman",
    "price": 15000
}

```

### Response: 200
```json
{
    "status": "Success",
    "message": "Menu berhasil di update",
    "data": {
        "id": 12,
        "menu_name": "Kopi Kenangan Americano",
        "category": "Minuman",
        "price": 15000
    }
}
```

### Response: 422
```json
{
    "status": "Failed",
    "message": "Validasi tidak berhasil",
    "errors": {
        "menu_name": [
            "The menu name field is required."
        ]
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Delete Menu
Endpoint untuk menghapus data Customer
### Method: DELETE
>```
>{{menu_url}}/api/menus/12
>```
### Response: 200
```json
{
    "status": "Success",
    "message": "Menu berhasil terhapus",
    "data": null
}
```

### Response: 404
```json
{
    "status": "Error",
    "message": "Menu tidak ditemukan",
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Recommendation Menu by Budget
Endpoint untuk merekomendasikan Menu berdasarkan Budget (Tren AI)
### Method: POST
>```
>{{menu_url}}/api/menus/recom-by-budget
>```
### Body (**raw**)

```json
{
    "budget" : "42000"
}
```

### Response: 200
```json
{
    "status": "Success",
    "message": "Rekomendasi menu berdasarkan budget",
    "budget_input": "42000",
    "total_spent": 40000,
    "remaining_budget": 2000,
    "recommended_menus": [
        {
            "id": 6,
            "menu_name": "Dimsum Mentai",
            "category": "Makanan",
            "price": 30000
        },
        {
            "id": 4,
            "menu_name": "Coca Cola",
            "category": "Minuman",
            "price": 10000
        }
    ]
}
```

### Response: 200
```json
{
    "status": "Success",
    "message": "Rekomendasi menu berdasarkan budget",
    "budget_input": "420",
    "total_spent": 0,
    "remaining_budget": 420,
    "recommended_menus": []
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃
_________________________________________________
Powered By: [postman-to-markdown](https://github.com/bautistaj/postman-to-markdown/)
