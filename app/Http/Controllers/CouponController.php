<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::paginate(10);
        return view('admin.coupon.index', compact('coupons'))->with('title', 'Coupon');
    }

    public function create()
    {
        return view('admin.coupon.create')->with('title', 'Coupon');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'jumlah' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($image = $request->file('gambar')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['gambar'] = "$profileImage";
        }

        Coupon::create($data);

        return redirect()->route('admincoupon.index')
            ->with('success', 'Coupon created successfully.');
    }

    public function show(Coupon $admincoupon)
    {
        return view('admin.coupon.show', compact('admincoupon'))->with('title', 'Coupon');
    }

    public function edit(Coupon $admincoupon)
    {
        return view('admin.coupon.edit', compact('admincoupon'))->with('title', 'Coupon');
    }

    public function update(Request $request, Coupon $admincoupon)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'jumlah' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($image = $request->file('gambar')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['gambar'] = "$profileImage";
        } else {
            unset($data['gambar']);
        }

        $admincoupon->update($data);

        return redirect()->route('admincoupon.index')
            ->with('success', 'Coupon updated successfully.');
    }

    public function destroy(Coupon $admincoupon)
    {
        $admincoupon->delete();

        return redirect()->route('admincoupon.index')
            ->with('success', 'Coupon deleted successfully.');
    }
}
