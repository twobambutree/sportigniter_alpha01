<?php

namespace App\Http\Requests\Frontend\Playbook;

use Illuminate\Foundation\Http\FormRequest;

class PhysicalUpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
      return [
        'dob' => 'max:255',
        'height_ft' => 'max:255',
        'height_in' => 'max:255',
        'weight' => 'max:255',
        'gender' => 'max:255',
      ];
    }
}
