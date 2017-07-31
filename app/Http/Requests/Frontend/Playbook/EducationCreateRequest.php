<?php

namespace App\Http\Requests\Frontend\Playbook;

use Illuminate\Foundation\Http\FormRequest;

class EducationCreateRequest extends FormRequest
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
          'school' => 'max:255',
          'graduation' => 'max:255',
          'town' => 'max:255',
          'gpa' => 'max:255',
          'sat' => 'max:255',
          'act' => 'max:255',
          'volunteer' => 'max:255',
        ];
    }
}
