<?php

namespace App\Http\Requests;

use App\Models\Contacts;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactsUpdateRequest extends FormRequest
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
        $contact = Contacts::find(request()->segment(1));

        return [
            'name' => 'required|min:5',
            'contact' => 'required|unique:contacts,contact,' . $contact->id . '|max:9',
            'email' => 'required|unique:contacts,email,' . $contact->id . '|email',
        ];
    }
}
