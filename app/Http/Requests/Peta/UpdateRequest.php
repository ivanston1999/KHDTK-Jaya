<?php

namespace App\Http\Requests\Peta;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // dont' forget to set this as true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        // make all of the fields required, set featured image to accept only images
        return [
            'nama' => 'required|string|min:3|max:250',
            'deskripsi' => 'required|string|min:3|max:6000',
            'gambar' => 'nullable|image|max:10240|mimes:jpg,jpeg,png',
        ];
    }
}
