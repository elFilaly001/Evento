<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class EventRequest extends FormRequest
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
        // dd(Str::length($_REQUEST['description']));
        return [
            "image" => "required|image",
            'title' => 'required|max:50',
            'description' => 'required|max:10000',
            'location' => 'required',
            'num_places' => 'numeric',
            'category_id' => 'required',
            'date' => 'required|date',
        ];
    }
}
