<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class JobRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'product_id' => ['required', 'numeric', Rule::exists('companies', 'id')],
            'name' => ['required', 'string', 'max:255'],
            'Price' => ['required', 'string', 'max:255'],
        ];
    }

    protected function prepareForValidation()
    {
        if (auth()->user()->is_product_admin) {
            $this->merge([
                'product_id' => auth()->user()->product_id,
            ]);
        }
    }
}