<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestInformationStore extends FormRequest
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
            "information_name"      => 'required|min:3|max:20',
            "information_lastname"  => 'required|min:3|max:20',
            "information_email"     => 'required|email',
            "information_phone"     => 'required|numeric|digits:10',
            "information_country"   => 'required|min:3|max:25',
            "information_city"      => 'required|min:3|max:25',
            "information_work"      => 'nullable|in:0,1',
            "information_company"   => 'nullable|required_if:information_work,1',
            "information_capital"   => 'nullable',
            "information_comments"  => 'nullable|min:50|max:250',
        ];
    }

    public function messages()
    {
        return [
            "information_name.required"         => 'El campo Nombre en el formulario de franquicias es requerido',
            "information_name.min"              => 'El campo Nombre en el formulario de franquicias debe tener mínimo tres caracteres',
            "information_name.max"              => 'El campo Nombre en el formulario de franquicias debe tener máximo veinte caracteres',
            "information_lastname.required"     => 'El campo Apellidos en el formulario de franquicias es requerido',
            "information_lastname.min"          => 'El campo Apellidos en el formulario de franquicias debe tener mínimo tres caracteres',
            "information_lastname.max"          => 'El campo Apellidos en el formulario de franquicias debe tener máximo veinte caracteres',
            "information_email.required"        => 'El campo Email en el formulario de franquicias es requerido',
            "information_email.email"           => 'El campo Email en el formulario de franquicias debe ser un correo valido',
            "information_phone.required"        => 'El campo Teléfono en el formulario de franquicias es requerido',
            "information_phone.numeric"         => 'El campo Teléfono en el formulario de franquicias debe ser numerico',
            "information_phone.digits"          => 'El campo Teléfono en el formulario de franquicias debe constar de diez digitos',
            "information_country.required"      => 'El campo País en el formulario de franquicias es requerido',
            "information_country.min"           => 'El campo País en el formulario de franquicias debe tener mínimo tres caracteres',
            "information_country.max"           => 'El campo País en el formulario de franquicias debe tener máximo veinticienco caracteres',
            "information_city.required"         => 'El campo Ciudad en el formulario de franquicias es requerido',
            "information_city.min"              => 'El campo Ciudad en el formulario de franquicias debe tener mínimo tres caracteres',
            "information_city.max"              => 'El campo Ciudad en el formulario de franquicias debe tener máximo veinticienco caracteres',
            "information_work.in"               => 'Debe elegir si trabaja',
            "information_company.required_if"   => 'Sí trabaja en el sector inmoviliario debe especificar la empresa',
            "information_comments.min"          => 'El campo Comentarios debe tener mínimo cincuenta caracteres',
            "information_comments.max"          => 'El campo Comentarios debe tener máximo docietoscincuenta caracteres',
        ];
    }
}
