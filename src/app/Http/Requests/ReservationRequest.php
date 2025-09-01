<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class ReservationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $tomorrow = Carbon::tomorrow()->toDateString();

        return [
            'date' => ['required', 'date', 'after_or_equal:' . $tomorrow],
            'time' => ['required'],
            'number' => ['required', 'integer', 'between:1,10'],
        ];
    }

    public function messages()
    {
        return [
            'date.required' => '日付を選択してください。',
            'date.date' => '正しい日付を入力してください。',
            'date.after_or_equal' => '当日を含む過去は選択できません。',

            'time.required' => '選択してください。',

            'number.required' => '選択してください。',
            'number.integer' => '人数は数値で指定してください。',
            'number.between' => '人数は1〜10人の範囲で選択してください。',
        ];
    }
}