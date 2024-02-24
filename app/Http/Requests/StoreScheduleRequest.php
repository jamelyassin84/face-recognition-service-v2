<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreScheduleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'faculty_id' => 'required|exists:faculties,id',
            'course_id' => 'required|exists:courses,id',
            'faculty_id' => 'required|exists:faculties,id',
            'subject_id' => 'required|exists:subjects,id',
            'day' => 'required|in:mon,tue,wed,thu,fri,sat,sun',
            'start_time' => 'required|date_format:H:i:s',
            'end_time' => 'required|date_format:H:i:s',
            'students' => 'required|array',
            'students.*' => 'required|exists:students,id',
        ];
    }
}
