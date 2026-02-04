# HealthMart (Phase 1)

A healthcare e-commerce platform inspired by 1mg. Phase 1 delivers a Laravel-based frontend + REST API foundation that can power both the website and a Flutter app.

## Tech Stack
- **Backend**: PHP 8.x (Laravel-style architecture)
- **Database**: MySQL
- **API**: RESTful JSON APIs
- **Auth**: JWT (token flow placeholders in controllers)
- **Frontend**: Blade + Bootstrap 5

## Setup (local)
1. Install PHP 8.x and MySQL.
2. Configure environment values in `.env` (see `.env.example` if added).
3. Run migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```
4. Serve the app:
   ```bash
   php artisan serve
   ```

> Note: This repository includes Laravel-like structure and endpoints. Add a full Laravel install if you want to run it end-to-end.

## Database Schema (Phase 1)
- users
- categories
- products
- carts
- cart_items
- orders
- order_items
- prescriptions
- addresses

## API Endpoints (examples)
- `POST /api/register`
- `POST /api/login`
- `POST /api/forgot-password`
- `GET /api/categories`
- `GET /api/products`
- `GET /api/products/{id}`
- `GET /api/cart`
- `POST /api/cart`
- `PUT /api/cart`
- `DELETE /api/cart`
- `GET /api/orders`
- `POST /api/orders`

### Sample JSON Responses
**Register**
```json
{
  "message": "Registration successful",
  "token": "jwt_token_placeholder",
  "user": {
    "id": 1,
    "name": "Demo User",
    "email": "demo@healthmart.test",
    "phone": "9999999999"
  }
}
```

**Product List**
```json
{
  "data": [
    {
      "id": 1,
      "name": "FlexiRelief Pain Tablets",
      "brand": "Healix",
      "salt": "Ibuprofen 400mg",
      "price": "120.00",
      "stock": 120,
      "prescription_required": false
    }
  ],
  "links": {
    "next": "https://example.test/api/products?page=2"
  },
  "meta": {
    "current_page": 1
  }
}
```

**Order Response**
```json
{
  "data": {
    "id": 1,
    "order_number": "AB12CD34EF",
    "status": "pending",
    "subtotal": "520.00",
    "discount": "20.00",
    "shipping": "0.00",
    "total": "500.00",
    "payment_status": "mock_paid",
    "items": [
      {
        "id": 1,
        "quantity": 1,
        "unit_price": "500.00",
        "line_total": "500.00"
      }
    ]
  }
}
```

## Folder Overview
```
app/
  Http/Controllers/
    Api/  # REST APIs (JWT-ready)
    Web/  # Blade frontend controllers
  Http/Resources/ # API resources
  Models/         # Eloquent models + relationships
  Services/       # Cart/Order/Prescription services
resources/views/  # Blade templates
routes/
  api.php
  web.php
```

## Next Steps (Phase 2)
- Integrate JWT package (e.g., tymon/jwt-auth)
- Add validation rules and form requests
- Implement real payment gateway
- Admin panel & inventory management
