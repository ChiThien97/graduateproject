<?php

namespace App\Http\Requests\Admin\Loaisanpham;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreLoaisanpham extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.loaisanpham.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'tenloai' => ['required', 'string'],
            'slug' => ['required', Rule::unique('loaisanpham', 'slug'), 'string'],
            'mota' => ['nullable', 'string'],
            'ngaytao' => ['nullable', 'date'],
            'enabled' => ['required', 'boolean'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
