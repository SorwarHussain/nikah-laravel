<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return array_merge(
            $this->personalInformationRules(),
            $this->addressRules(),
            $this->familyDetailsRules(),
            $this->contactInformationRules()
        );
    }
    private function personalInformationRules(): array
    {
        return [
            'name' => 'required|string',
            'weight' => 'required|string',
            'bioType' => 'required|string',
            'maritalStatus' => 'required|string',
            'birthData' => 'required|string',
            'skinColor' => 'required|string',
            'height' => 'required|string',
            'blood' => 'required|string',
            'education' => 'required|string',
        ];
    }

    private function addressRules(): array
    {
        return [
            'district' => 'required|string',
            'upazila' => 'required|string',
            'permAddress' => 'required|string',
            'preAddress' => 'required|string',
        ];
    }

    private function familyDetailsRules(): array
    {
        return [
            'fatherName' => 'required|string',
            'motherName' => 'required|string',
            'fatherOccupation' => 'required|string',
            'motherOccupation' => 'required|string',
            'brotherNum' => 'required|string',
            'sisterNum' => 'required|string',
            'brotherDetails' => 'string',
            'sisterDetails' => 'string',
            'uncle' => 'required|string',
            'familyStatus' => 'required|string',
            'familyDeen' => 'required|string',
        ];
    }

    private function contactInformationRules(): array
    {
        return [
            'guardianNum' => 'required|string',
            'guardian' => 'required|string',
            'email' => ['required', 'email', 'max:255'],
            'number' => 'required|string',
            'is_approved' => 'boolean',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        $requiredMessage = 'This field is required.';
        return [
            'name.required' => $requiredMessage,
            'weight.required' => $requiredMessage,
            'bioType.required' => $requiredMessage,
            'maritalStatus.required' => $requiredMessage,
            'district.required' => $requiredMessage,
            'upazila.required' => $requiredMessage,
            'birthData.required' => $requiredMessage,
            'skinColor.required' => $requiredMessage,
            'height.required' => $requiredMessage,
            'blood.required' => $requiredMessage,
            'permAddress.required' => $requiredMessage,
            'preAddress.required' => $requiredMessage,
            'education.required' => $requiredMessage,
            'fatherName.required' => $requiredMessage,
            'motherName.required' => $requiredMessage,
            'fatherOccupation.required' => $requiredMessage,
            'motherOccupation.required' => $requiredMessage,
            'brotherNum.required' => $requiredMessage,
            'sisterNum.required' => $requiredMessage,
            'uncle.required' => $requiredMessage,
            'familyStatus.required' => $requiredMessage,
            'familyDeen.required' => $requiredMessage,
            'guardianNum.required' => $requiredMessage,
            'guardian.required' => $requiredMessage,
            'email.required' => $requiredMessage,
            'number.required' => $requiredMessage,

        ];
    }
}
