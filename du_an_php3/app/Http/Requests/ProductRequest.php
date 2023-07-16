<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $rules = [];
        //lay ten phuong thuc can xu ly
        $currentAction = $this->route()->getActionMethod();
        switch ($this->method()):
            case 'POST':
                switch ($currentAction):
                    case 'add':
                        //xay dung rules validate
                        $rules = [
                            'name' => 'required|unique:product',
                            'price' => 'required',
                            'number' => 'required',
                            'color' => 'required',
                            'img' => 'required',
                            'size' => 'required',
                            'cpu' => 'required',
                            'ram' => 'required',
                            'rom' => 'required',
                            'pin' => 'required',
                            'company' => 'required',
                            'id_category' => 'required'
                            // 'email' => 'required|email|unique:students'
                        ];
                endswitch;
                break;
        endswitch;
        return $rules;
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống!',
            'name.unique'=>'Tên đã tồn tại!',
            'price.required' => 'Giá không được để trống!',
            'number.required' => 'Số lượng không được để trống!',
            'color.required' => 'Màu không được để trống!',
            'img.required' => 'Ảnh không được để trống!',
            'size.required' => 'Kích cỡ không được để trống!',
            'cpu.required' => 'CPU không được để trống!',
            'ram.required' => 'RAM không được để trống!',
            'rom.required' => 'ROM không được để trống!',
            'pin.required' => 'PIN không được để trống!',
            'company.required' => 'Thương hiệu không được để trống!',

        ];
    }
}
