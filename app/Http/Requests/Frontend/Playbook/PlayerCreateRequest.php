<?php

namespace App\Http\Requests\Frontend\Playbook;

use Illuminate\Foundation\Http\FormRequest;

class PlayerCreateRequest extends FormRequest
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
          'sport' => 'max:255',
          'team' => 'max:255',
          'position' => 'max:255',
          'coach' => 'max:255',
          'jersey' => 'max:255',
          'other' => 'max:500',
          'about' => 'max:500',
        ];
    }
}
