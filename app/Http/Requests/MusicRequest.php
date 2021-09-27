<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MusicRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'music.artist' => 'required|string|max:1000',
            'music.title' => 'required|string|max:1000',
            'music.body' => 'required|string|max:4000',
        ];
    }
}
