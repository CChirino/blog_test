<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
            $rules = [
                'title' => 'required' , 
                'description'  => 'required' , 
                'status'  => 'required| in:1,2',
            ];

            if ($this->status == 2 ){
                $rules = array_merge($rules, [
                    'category_id' => 'required' , 
                    'content' => 'required' , 
                ]);
            }
            return $rules;
    }
}
