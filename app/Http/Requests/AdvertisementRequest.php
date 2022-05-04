<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvertisementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'exists:app\Models\User,id',
            'period'=>'required',
            'details'=>'max:1000',
            'startDate'=>'required|date',
            'image'=>'image',
            
        ];
    }
    public function messages()
    {
        return [
            'user_id.exists'=>'المستخدم غير موجود',
            'period.required'=>'عليك إخال المدة المحددة لعرض الإعلان',
            'startDate.required'=>'عليك إدخال تارخ بدء عرض الإعلان',
            'startDate.date'=>'الرجاء التأكد من كتابة التاريخ بشكل صحيح',
            'image.image'=>'تأكد من صيغة الملف'
        ];
    }
}