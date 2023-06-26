<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() {
        switch($this->method()) {
            case 'POST': {
                return [
                    'title' => 'required|string|min:10',
                    'price' => 'required|integer|min:20',
                    'desc' => 'required|string',
                    'size' => 'required|array',
                    'link' => 'required|string',
                    'image' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable'
                ];
            } break;
            case 'PUT': {
                return [
                    'title' => 'required|string|min:10',
                    'price' => 'required|integer|min:20',
                    'desc' => 'required|string',
                    'size' => 'required|array',
                    'link' => 'required|string',
                    'image' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable'
                ];
            } break;
        }
    }
}
