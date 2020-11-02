<?php

namespace App\Http\Controllers;

use App\Http\Services\WishService;
use App\Http\Requests\StoreWishRequest;
use App\Wish;

/**
 * Class WishController
 * @package App\Http\Controllers
 */
class WishController extends Controller
{
    /**
     * @var WishService
     */
    private $wishService;

    /**
     * WishController constructor.
     * @param WishService $wishService
     */
    public function __construct(WishService $wishService)
    {
        $this->wishService = $wishService;
        $this->middleware('auth');
    }

    /**
     * store a wish
     *
     * @param StoreWishRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreWishRequest $request)
    {
        $wish = $this->wishService->store($request->validated());

        $this->wishService->storeImage($wish);

        return redirect('/wish/show');
    }

    /**
     * edit a wish
     *
     * @param Wish $wish
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Wish $wish)
    {
        return view('wish.edit', compact('wish'));
    }

    /**
     * update a wish
     *
     * @param StoreWishRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Wish $wish, StoreWishRequest $request)
    {
        $wish = $this->wishService->update($wish, $request->validated());

        $this->wishService->storeImage($wish);

        return redirect('/wish/show');
    }

    /**
     * delete a wish
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Wish $wish)
    {
        $this->wishService->delete($wish);

        return redirect('/wish/show');
    }
}
