<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use App\Rules\StrictLengthDigit;

class UserStoreRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:users'
        ];
    }
}
