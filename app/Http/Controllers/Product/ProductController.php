<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;

/**
 * Controller for the products.
 */
class ProductController extends Controller
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
     * Returns an array of Product objects.
     *
     * @return array
     */
    public function all()
    {
        $products = $this->repository->all();
        dd($products);
    }

    /**
     * Returns an Product Object with the provided id.
     *
     * @return object
     */
    public function get($id)
    {
        $additional = $this->repository->find($id);
        dd($additional);
    }

    /**
     * Store a new product.
     *
     * @return boolean
     */
    public function create($request)
    {
        $response = $this->repository->create($request);
        dd($response);
    }

     /**
     * Update a product.
     *
     * @return boolean
     */
    public function update($request)
    {
        $response = $this->repository->update($request);
        dd($response);
    }

     /**
     * Delete a product.
     *
     * @return boolean
     */
    public function delete($request)
    {
        $response = $this->repository->delete($request);
        dd($response);
    }
}
