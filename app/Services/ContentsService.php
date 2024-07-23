<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Contents\ContentFile;
use App\Repositories\ContentsRepository;

class ContentsService extends ContentsRepository
{
    public function __construct(ContentFile $model)
    {
        parent::__construct(
            $model,
            [],
            []
        );
    }

    public function create($payload)
    {
        $path = $payload['file']->store('contents/files', 'public');
        $payload['file_path'] = $path;
        $payload['file_url'] = config('app.url') . '/assets/get?path=' . $path;
        unset($payload['file']);

        return parent::create($payload);
    }

    public function deleteById($id)
    {
        $record = parent::getById($id);
        $imagePath = 'public/' . $record->file_path;

        if (Storage::exists($imagePath))
        {
            Storage::delete($imagePath);
        }

        return parent::deleteById($id);
    }
}
