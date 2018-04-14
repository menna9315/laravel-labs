<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePostRequest extends FormRequest
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
        //dd($this->id);
        return [
            //'title'=> [ Rule::unique('posts')->ignore($this->id),'min:3', 'required'], 
            'title'=>'required|min:3|unique:posts,title,'.$this->post,
            'desc' =>'required|min:10',
            'user_id' => 'exists:users,id',
        ];
    }
}
