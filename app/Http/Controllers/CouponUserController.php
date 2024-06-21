<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CouponUserController extends Controller
{
    public function index()
    {
        $title = 'Coupons';
        $coupons = Coupon::paginate(10);
        return view('main.coupon', compact('coupons', 'title'));
    }

    public function claim($id)
    {
        $coupon = Coupon::findOrFail($id);
        $user = Auth::user();

        // Cek apakah kupon sudah diklaim oleh pengguna
        if ($coupon->claimed_by === $user->id) {
            return redirect()->route('coupons.index')->with('error', 'You have already claimed this coupon.');
        }

        if ($coupon->jumlah > 0) {
            $coupon->jumlah--;
            $coupon->claimed_by = $user->id;
            $coupon->save();

            return redirect()->route('coupons.index')->with('success', 'Coupon claimed successfully.');
        } else {
            return redirect()->route('coupons.index')->with('error', 'Coupon is not available.');
        }
    }
}
