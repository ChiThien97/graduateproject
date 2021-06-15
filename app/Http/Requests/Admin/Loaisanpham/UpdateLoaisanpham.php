<?php

namespace App\Http\Requests\Admin\Loaisanpham;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateLoaisanpham extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.loaisanpham.edit', $this->loaisanpham);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'tenloai' => ['sometimes', 'string'],
            'slug' => ['sometimes', Rule::unique('loaisanpham', 'slug')->ignore($this->loaisanpham->getKey(), $this->loaisanpham->getKeyName()), 'string'],
            'mota' => ['nullable', 'string'],
            'ngaytao' => ['nullable', 'date'],
            'enabled' => ['sometimes', 'boolean'],
            
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
