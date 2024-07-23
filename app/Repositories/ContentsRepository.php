<?php

namespace App\Repositories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;

class ContentsRepository extends BaseRepository
{
    public function __construct(
        private readonly Model $model,
        private readonly array $relationships = [],
        private readonly array $shownRelationshipsInList = []

    )
    {
        parent::__construct(
            $model,
            $relationships,
            $shownRelationshipsInList,
            []
        );
    }

    public function create($payload)
    {
        $payload['content_uid'] = Str::uuid();
        $payload['name_slug'] = Str::slug($payload['name']);

        return parent::create($payload);
    }
}
