<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Weapon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($type)
    {
        $weapon = compact('type');
        switch ($weapon['type']) {
            case 'pistol':
                $type = 1;
                break;
            case 'assault-rifle':
                $type = 2;
                break;
            case 'shotgun':
                $type = 3;
                break;
            case 'submachine-gun':
                $type = 4;
                break;
            case 'machine-gun':
                $type = 5;
                break;
            case 'sniper':
                $type = 6;
                break;
            default:
                $type = 0;
                break;
        }
        $data = Product::where('weapontype_id', $type)->paginate(40);
        
        return view('productpage', ['data' => $data, 'weapon' => $weapon, 'type' => $weapon['type']]);
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
