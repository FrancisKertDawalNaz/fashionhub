<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'nullable|integer',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|string|max:1024',
            'shop' => 'nullable|string|max:255',
            'qty' => 'required|integer|min:1',
            'duration' => 'nullable|string|max:255',
        ]);

        $quantity = (int) ($data['qty'] ?? 1);
        $price = (float) $data['price'];
        $total = $price * $quantity;

        $createData = [
            'user_id' => auth()->check() ? auth()->id() : null,
            'session_id' => session()->getId(),
            'product_id' => $data['product_id'] ?? null,
            'name' => $data['name'],
            'price' => $price,
            'quantity' => $quantity,
            'size' => null,
            'duration' => $data['duration'] ?? null,
            'image' => $data['image'] ?? null,
            'shop' => $data['shop'] ?? null,
            'total' => $total,
        ];

        try {
            $cartItem = CartItem::create($createData);

            return response()->json([
                'success' => true,
                'message' => $data['name'] . ' added to cart!',
                'item' => $cartItem
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to save cart item'
            ], 500);
        }
    }
}
