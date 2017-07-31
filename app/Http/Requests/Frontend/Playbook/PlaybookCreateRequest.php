<?php

namespace App\Http\Requests\Frontend\Playbook;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class PlaybookCreateRequest extends FormRequest
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
          'name'      => 'required|max:255',
          'sname'     => 'required|max:255|alpha_num|unique:playbooks,sname',
          'about'     => 'max:2000',
          'filename'  => 'max:255',
        ];
    }

    public function message()
    {
      return [
        'sname.unique' => 'That screen is Taken',
      ];
    }
}
