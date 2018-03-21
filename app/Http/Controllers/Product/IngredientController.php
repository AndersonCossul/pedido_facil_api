<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;

/**
 * Controller for the product ingredients.
 */
class IngredientController extends Controller
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
     * Returns an array of Ingredient objects.
     *
     * @return array
     */
    public function all()
    {
        $ingredients = $this->repository->all();
        dd($ingredients);
    }

    /**
     * Returns an Ingredient Object with the provided id.
     *
     * @return object
     */
    public function get($id)
    {
        $additional = $this->repository->find($id);
        dd($additional);
    }

    /**
     * Store a new ingredient.
     *
     * @return boolean
     */
    public function create($request)
    {
        $response = $this->repository->create($request);
        dd($response);
    }

     /**
     * Update an ingredient.
     *
     * @return boolean
     */
    public function update($request)
    {
        $response = $this->repository->update($request);
        dd($response);
    }

     /**
     * Delete an ingredient.
     *
     * @return boolean
     */
    public function delete($request)
    {
        $response = $this->repository->delete($request);
        dd($response);
    }
}
