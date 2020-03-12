<?php

namespace App\Repositories;

use App\Post;
use App\Servidor;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PostRepository implements ServidorRepositoryInterface
{
    protected $model;

    /**
     * PostRepository constructor.
     *
     * @param Post $post
     */
    public function __construct(Servidor $servidor)
    {
        $this->model = $servidor;
    }

    public function all()
    {
        $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->model->where('id', $id)
            ->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function find($id)
    {
        if (null == $servidor = $this->model->find($id)) {
            throw new ModelNotFoundException("Servidor not found");
        }

        return $servidor;
    }
}