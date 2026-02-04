<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        return AddressResource::collection(Address::query()->where('user_id', 1)->get());
    }

    public function store(Request $request)
    {
        $address = Address::create($request->all());

        return new AddressResource($address);
    }

    public function update(Request $request, Address $address)
    {
        $address->update($request->all());

        return new AddressResource($address);
    }

    public function destroy(Address $address)
    {
        $address->delete();

        return response()->json(['message' => 'Address removed']);
    }
}
