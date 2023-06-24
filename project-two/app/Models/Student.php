<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $student;

    public function newStudent()
    {
        $this->student = new Student();
        $this->student->name   = 'Riaz';
        $this->student->email   = 'riaz@gmail.com';
        $this->student->mobile   = '01472589632';
        $this->student->save();
    }

    public static function getAllStudent()
    {
        return [
            0 => [
                'id'            => 1,
                'name'          => 'Shafi',
                'email'         => 'shafi@gmail.com',
                'mobile'        => '01714-552211',
                'img'           => '',
            ],
            1 => [
                'id'            => 2,
                'name'          => 'Nuha',
                'email'         => 'nuha@gmail.com',
                'mobile'        => '01714-556124',
                'img'           => '',
            ],
        ];
    }
}
