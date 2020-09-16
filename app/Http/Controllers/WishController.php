<?php

namespace App\Http\Controllers;

use App\Wish;
use App\Http\Requests\StoreWishRequest;
use Illuminate\Http\Request;

class WishController extends Controller
{
    public function create(StoreWishRequest $request)
    {
        $wish = Wish::create($request->all());

        $this->storeImage($wish);

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

    public function edit()
    {
        return view('wishes.editWish',
            [
                'wishes' => Wish::where('id', Request('id'))->first()
            ]
        );
    }

    public function update(StoreWishRequest $request)
    {
        $wish = Wish::where('id', Request('id'))->update($request->except(['_token']));

        $this->storeImage($wish);

        return redirect('/wishlist');
    }

    public function destroy()
    {
        Wish::where('id', Request('id'))->delete();

        return redirect('/wishlist');
    }

    public function storeImage($wish)
    {
        if (request()->has('plaatje'))
        {
            $wish->update(
                [
                    'plaatje' => request()->plaatje->store('uploads', 'public')
                ]
            );
        }
    }
}
