<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Create: Add product to cart
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $sessionId = session()->getId();  // Menggunakan session ID
    
        // Cek apakah produk sudah ada di keranjang
        $cartItem = Cart::where('product_id', $productId)
                        ->where('session_id', $sessionId)
                        ->first();
    
        if ($cartItem) {
            // Jika produk sudah ada, tambahkan kuantitasnya
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            // Jika produk belum ada, buat entri baru
            Cart::create([
                'product_id' => $productId,
                'session_id' => $sessionId,
                'quantity' => 1,
            ]);
        }
    
        // Mengembalikan response dalam format JSON
        return response()->json(['success' => true, 'message' => 'Produk berhasil ditambahkan ke keranjang!']);
    }
    

    

    // Read: Show cart items
    public function showCart()
    {
        $cartItems = Cart::with('product')->where('session_id', session()->getId())->get();
    
        if ($cartItems->isEmpty()) {
            return view('cart')->with('message', 'Keranjang Anda kosong.');
        }
    
        $subtotal = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);
        $tax = $subtotal * 0.05; // Pajak 5%
        $shipping = 15000; // Biaya pengiriman tetap
        $total = $subtotal + $tax + $shipping;
    
        return view('cart', compact('cartItems', 'subtotal', 'tax', 'shipping', 'total'));
    }
    

    // Update: Change quantity
    public function updateQuantity(Request $request, $id)
    {
        $cartItem = Cart::findOrFail($id);
        $newQuantity = $cartItem->quantity + $request->quantity;

        if ($newQuantity > 0) {
            $cartItem->update(['quantity' => $newQuantity]);
        } else {
            $cartItem->delete();
        }

        return redirect()->route('cart.show')->with('success', 'Jumlah produk berhasil diperbarui!');
    }

    public function cartCount()
    {
        $session_id = session()->getId();
    
        try {
            $count = Cart::where('session_id', $session_id)->sum('quantity');
    
            return response()->json(['count' => $count]);
        } catch (\Exception $e) {
            \Log::error('Error in cartCount: ' . $e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }
    
// Checkout: Clear cart and notify
    public function checkout()
    {
        $session_id = session()->getId();
    
        // Hapus semua item di keranjang untuk session ini
        Cart::where('session_id', $session_id)->delete();
    
        // Kirim respons JSON
        return response()->json([
            'success' => true,
            'message' => 'Checkout berhasil! Pesanan Anda sedang diproses.'
        ]);
    }
    

    


    // Delete: Remove item from cart
    public function removeItem($id)
    {
        Cart::findOrFail($id)->delete();
        return redirect()->route('cart.show')->with('success', 'Produk berhasil dihapus dari keranjang!');
    }

    
}

?>