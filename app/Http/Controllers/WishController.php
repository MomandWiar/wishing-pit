<?php

namespace App\Http\Controllers;

use App\Wish;
use App\Http\Requests\StoreWishRequest;
use Illuminate\Http\Request;

class WishController extends Controller
{
    public function create(StoreWishRequest $request)
    {
        Wish::create($request->all());

        return redirect('/wishlist');

    }

    public function show()
    {
        return view('wishes.wishlist',
            [
                'wishes' => Wish::all()
            ]
        );
    }

    public function read()
    {
        return view('wishes.editWish',
            [
                'wishes' => Wish::where('id', Request('id'))->first()
            ]
        );
    }

    public function update(StoreWishRequest $request)
    {
        Wish::where('id', Request('id'))->update($request->except(['_token']));

        return redirect('/wishlist');
    }

    public function delete()
    {
        Wish::where('id', Request('id'))->delete();

        return redirect('/wishlist');
    }
}
