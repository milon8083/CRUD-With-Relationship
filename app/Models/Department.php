<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public static $department;
    public static function saveInfo($request,$id=null)
    {
        if($id=null)
        {
            self::$department = Department::find($id);
        }
        else
        {
            self::$department = new Department();
        }

        self::$department->name = $request->name;
        self::$department->code = $request->code;
        self::$department->save();
    }
}
