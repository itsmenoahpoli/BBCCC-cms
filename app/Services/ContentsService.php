<?php

namespace App\Services;

use App\Models\Contents\ContentFile;
use App\Repositories\ContentFilesRepository;

class ContentsService extends ContentFilesRepository
{
    public function __construct(ContentFile $model)
    {
        parent::__construct(
            $model,
            [],
            []
        );
    }
}
