<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => "required|unique:employees,email,{$this->employee->id}",
            'phone' => "required|unique:employees,phone,{$this->employee->id}",
            'designation_id' => 'required',
            'employee_image' => 'mimes:jpeg,png,jpg',
        ];
    }
}
