<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tea extends Model
{
    use HasFactory;
    public static $tea,$image,$dir,$imgurl,$imgnewname;
    public static function create($request)
    {
        self::$tea = new Tea();

        self::$tea->name = $request->name;
        self::$tea->phone = $request->phone;
        self::$tea->dept_id = $request->dept_id;

        if($request->file('image'))
            {
                self::$tea->image = self::saveImage($request);
            }
        self::$tea->save();
    }

    private static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imgnewname = $request->name.'_'.rand().'.'.self::$image->extension();
        self::$dir = 'assets/img/';
        self::$imgurl = self::$dir.self::$imgnewname;
        self::$image->move(self::$dir,self::$imgnewname);
        return self::$imgurl;
    }

    public static function updated($request)
    {
        self::$tea=Tea::find($request->id);

        self::$tea->name = $request->name;
        self::$tea->phone = $request->phone;
        self::$tea->dept_id = $request->dept_id;

        if($request->file('image'))
        {
            if(file_exists(self::$tea->image))
            {
                unlink(self::$tea->image);
            }
            self::$tea->image = self::saveImage($request);
        }
        self::$tea->save();
    }

    public function department()
        {
            return $this->belongsTo(Department::class,'dept_id');

        }
}
