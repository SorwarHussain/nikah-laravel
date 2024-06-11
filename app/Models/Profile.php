<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'weight', 'bioType', 'maritalStatus','district','upazila','birthData','skinColor','height','blood','permAddress','preAddress','education','fatherName', 'motherName', 'fatherOccupation', 'motherOccupation', 'brotherNum', 'sisterNum','uncle','familyStatus','familyDeen','guardianNum','guardian','email','number'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
