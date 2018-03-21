<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;

/**
 * Controller for the product categories.
 */
class CategoryController extends Controller
{
    private $repository;

    /**
     * Using dependency injection to get the repository connected to the API in the app_providers.
     *
     * @param interface $repository
     */
    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    /**
     * Returns an array of Category objects.
     *
     * @return array
     */
    public function all()
    {
        $categories = $this->repository->all();
        dd($categories);
    }

    /**
     * Returns an Category Object with the provided id.
     *
     * @return object
     */
    public function get($id)
    {
        $additional = $this->repository->find($id);
        dd($additional);
    }

    /**
     * Store a new category.
     *
     * @return boolean
     */
    public function create($request)
    {
        $response = $this->repository->create($request);
        dd($response);
    }

     /**
     * Update a category.
     *
     * @return boolean
     */
    public function update($request)
    {
        $response = $this->repository->update($request);
        dd($response);
    }

     /**
     * Delete a category.
     *
     * @return boolean
     */
    public function delete($request)
    {
        $response = $this->repository->delete($request);
        dd($response);
    }
}
