<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
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
        switch($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];
            case 'POST':
                return [
                    'lesson_title' => 'required|string|max:255',
                    'lesson_content' => 'required',
                    'video_url' => 'required|mimes:mp4,mov,ogg,mkv|max:20000'
                ];
            case 'PATCH':
                return [
                    'lesson_title' => 'required|string|max:255',
                    'lesson_content' => 'required',
                ];
            case 'DEFAULT':
                return [];
        }
    }
}
