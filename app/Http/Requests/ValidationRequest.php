<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\Attributes\StopOnFirstFailure;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class ValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'name' => 'required',
            'age' => 'required|numeric',
            'city' => 'required | alpha'
        ];
    }
    #[Override]
    public function messages()
    {
        return [
            'name.required' => 'Ea alka sa khu oleka kna',
            'age.required' => 'Ta khu behe pa habar na poeagi'
        ];
    }
    protected $stopOnFirstFailure = true;
}
