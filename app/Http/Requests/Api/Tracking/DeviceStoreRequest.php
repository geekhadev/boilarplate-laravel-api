<?php

namespace App\Http\Requests\Api\Tracking;

use Illuminate\Foundation\Http\FormRequest;

class DeviceStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|max:255|unique:pgsql.tracking.devices',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Device name is required.',
            'name.string' => 'Device name must be a string.',
            'name.max' => 'Device name must not exceed 255 characters.',
            'name.unique' => 'Device name already exists.',
        ];
    }
}
