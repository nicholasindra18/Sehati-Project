<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class obatRequest extends FormRequest
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
      return match($this->method()) {
         'POST' => $this->createobat(),
         'PUT' => $this->updateobat()
      };
   }

   public function createobat() {
      return [
         'obat_name' => ['required', 'min:5', 'max:255','unique:obats'],
         'obat_price' => ['required', 'numeric'],
         'obat_ingredients' => ['required', 'min:5', 'max:255'],
         'obat_description' => ['required', 'min:5', 'max:255'],
         'category_id' => ['required'],
         'obat_photo' => ['required', 'mimes:jpeg, png, jpg', 'file', 'max:1024']
      ];
   }

   public function updateobat() {
      return [
         'obat_name' => ['required', 'min:5', 'max:255'],
         'obat_price' => ['required', 'numeric'],
         'obat_ingredients' => ['required', 'min:5', 'max:255'],
         'obat_description' => ['required', 'min:5', 'max:255'],
         'category_id' => ['required'],
         'obat_photo' => ['mimes:jpeg, png, jpg', 'file', 'max:1024']
      ];
   }
}
