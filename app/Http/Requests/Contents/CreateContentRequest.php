<?php

namespace App\Http\Requests\Contents;

use Illuminate\Foundation\Http\FormRequest;

class CreateContentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category'      => 'required|string',
            'name'          => 'required|string',
            'status'        => 'nullable|enum:draft,published,archived',
            'image'         => 'required|image|mimes:jpeg,png,gif|max:2048'
        ];
    }
}
