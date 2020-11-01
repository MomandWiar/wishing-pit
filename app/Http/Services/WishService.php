<?php

namespace App\Http\Services;

use App\Wishes;

/**
 * Class WishService
 * @package App\Http\Services
 */
class WishService
{
    /**
     * @param array $data
     */
    public function store(array $data) {
        return $this->save(
            new Wishes,
            $data
        );
    }

    /**
     * @param Wishes $wish
     * @param array $data
     */
    public function update(Wishes $wish, array $data) {
        return $this->save(
            $wish,
            $data
        );
    }

    /**
     * @param Wishes $wish
     * @return bool|null
     * @throws \Exception
     */
    public function delete(Wishes $wish)
    {
        return $wish->delete();
    }

    /**
     * @param Wishes $wish
     * @return bool
     */
    public function storeImage(Wishes $wish)
    {
        return $wish->update(
            [
                'plaatje' => $wish->plaatje->store('uploads', 'public')
            ]
        );
    }

    /**
     * Save Model in the database.
     * @param Wishes $wish
     * @param array $data
     * @return Wishes
     */
    private function save(Wishes $wish, array $data){
        $wish->fill($data);
        $wish->save();

        return $wish;
    }

}
