<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestContactStore extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'contact_name'      => 'required|min:3|max:20',
            'contact_lastname'  => 'required|min:3|max:20',
            'contact_email'      => 'required|email',
            'contact_phone'     => 'required|numeric|digits:10',
            'contact_subject'   => 'required',
            'contact_comments'  => 'required|min:50|max:250',

        ];
    }

    public function messages()
    {
        return[
            'contact_name.required'     => 'El campo nombre es requierido',
            'contact_name.min'          => 'El campo nombre debe contener al menos tres caracteres',
            'contact_name.max'          => 'El campo nombre debe contener máximo veinte caracteres',
            'contact_lastname.required' => 'EL campo apellido es requerido',
            'contact_lastname.min'      => 'El campo apellido debe contener al menos tres caracteres',
            'contact_lastname.max'      => 'El campo apellido debe contener máximo veinte caracteres',
            'contact_email.required'    => 'El campo de email es requerido',
            'contact_email.email'       => 'El campo de email no tiene un formato valido',
            //'contact_email.unique'      => 'Este email ya se encuentra registrado',
            'contact_phone.requiered'   => 'El campo teléfono es requerido',
            'contact_phone.numeric'     => 'El campo teléfono debe ser numerico',
            'contact_phone.digits'      => 'El campo teléfono debe ser de diez digitos',
            'contact_subject.required'  => 'Seleccione un asunto de la lista',
            'contact_comments.required' => 'El campo comentarios es requerido',
            'contact_comments.min'      => 'El campo comentarios debe tener al menos cincuenta caracteres',
            'contact_comments.max'      => 'El campo comentarios debe tener máximo docientoscincuenta caracteres',
        ];
    }
}
