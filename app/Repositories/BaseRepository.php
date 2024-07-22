<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\QueryBuilder;
use App\Repositories\Interfaces\BaseRepositoryInterface;

class BaseRepository implements BaseRepositoryInterface
{
    private $eloquentModel;

    public function __construct(
        private readonly Model $model,
        private readonly array $relationships,
        private readonly array $showRelationshipsInList,
        private readonly array $searchFilters = [],
        private readonly array $sortFilters = [],

    )
    {
        $this->eloquentModel = $this->model->query();
    }

    public function getListUsingQueryBuilder()
    {
        return QueryBuilder::for($this->eloquentModel)
            ->allowedFilters($this->searchFilters)
            ->defaultSort('-id')
            ->allowedSorts($this->sortFilters)
            ->allowedIncludes($this->relationships)
            ->get();
    }

    public function getPaginated($page = 1, $pageSize = 25, $orderBy = 'created_at', $sortBy = 'asc')
    {
        return $this->eloquentModel->with($this->showRelationshipsInList)->orderBy($orderBy, $sortBy)->paginate($pageSize);
    }

    public function getUnpaginated($orderBy = 'id', $sortBy = 'desc')
    {
        return $this->eloquentModel->with($this->showRelationshipsInList)->orderBy($orderBy, $sortBy)->get();
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function updateById($id, $data)
    {
        return tap($this->model->find($id))->update($data)->first();
    }

    public function getById($id)
    {
        return $this->model->with($this->relationships)->find($id);
    }

    public function deleteById($id)
    {
        return $this->model->findOrFail($id)->delete();
    }
}