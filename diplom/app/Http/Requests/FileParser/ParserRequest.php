<?php

namespace App\Http\Requests\FileParser;

use Illuminate\Foundation\Http\FormRequest;

class ParserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'file' => 'file:txt|required'
        ];
    }
}
