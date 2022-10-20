<?php

namespace App\Http\Requests;

use App\Models\Endpoint;
use Illuminate\Foundation\Http\FormRequest;

class StoreEndpointRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('create', Endpoint::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'protocol' => 'required|in:http,https',
            'base_url' => 'required|url',
            'query_string' => 'nullable|string',
        ];
    }
}
