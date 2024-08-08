<?php

namespace App\Http\Controllers;

use App\Models\Functionality;
use App\Models\Product;
use App\Models\Weapon;
use App\Models\WeaponType;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_weapon = Weapon::orderBy('weapon_id', 'ASC')->get();
        $data_weapontype = WeaponType::orderBy('weapontype_id', 'ASC')->get();
        $data_functionality = Functionality::orderBy('function_id', 'ASC')->get();
        $data_product = Product::orderBy('product_id', 'ASC')->take(12)->get();
        return view('homepage', ['data_weapon' => $data_weapon, 'data_weapontype' => $data_weapontype, 'data_functionality' => $data_functionality, 'data_product' => $data_product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
