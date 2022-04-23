<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PharmacyRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min(9)|numbers|letter|symbol',
            'name' => 'required',
            'mobile' => 'numeric|max(11)',
            'phone' => 'required|numeric|max(11)',
            'fax' => 'numeric|max(11)',
            'license'=>'required',
            'image'=>'image',
            'accept'=>'required'
        ];
    }

    public function messages()
    {
        return [

            'email.required' => 'يجب إدخال البريد الالكتروني ',
            'email.email' => 'صيغة البريد الالكتروني غير صحيحة ',
            'password.required' => 'يجب إدخال كلمة المرور',
            'password.min'=>'كلمة المرور قصيرة جداً',
            'password.numbers'=>'كلمة المرور يجب أن تحوي على رقم واحد على الأقل',
            'password.letter'=>'كلمة المرور يجب أن تحوي حرف واحد على الأقل',
            'password.symbol'=>'كلمة المرور يجب أن تحوي رمز واحد على الأقل',
            'name.required' => 'يجب إدخال اسم الصيدلية',
            'mobile.numeric'=>'يجب كتابة أرقام فقط',
            'mobile.max'=>'تأكد من كتابة الرقم بشكل صحيح',
            'phone.required'=>'يجب ملئ هذا الحقل برقم التلفون',
            'phone.max'=>'تأكد من كتابة الرقم بشكل صحيح',
            'phone.numeric'=>'يجب كتابة أرقام فقط',
            'fax.numeric'=>'يجب كتابة أرقام فقط',
            'fax.max'=>'تأكد من كتابة الرقم بشكل صحيح',
            'image.image'=>'الصيغة غير مدعومة تأكد من صيغة الملف',
            'license.required'=>'عليك إدخال الترخيص',
            'accept.required' => 'يجب ان توافق على الشروط '
            ];
    }
}