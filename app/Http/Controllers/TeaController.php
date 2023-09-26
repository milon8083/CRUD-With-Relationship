<?php

namespace App\Http\Controllers;

use App\Models\Tea;
use Illuminate\Http\Request;

class TeaController extends Controller
{
    private static $tea;
    public function create(Request $request)
    {
        // return $request->file('image');
        Tea::create($request);
        return back();
    }
    public function readView()
    {
        return view('read',[
            'tea'=>Tea::all()
        ]);

    }
    public function edit($id)
    {
        return view('edit',[
            'tea'=>Tea::find($id)
        ]);
    }
    public function update(Request $request)
    {
        Tea::updated($request);
        return redirect(route('read'));
    }
    public function delete(Request $request)
    {
        self::$tea = Tea::find($request->id);
        if(self::$tea->image)
        {
            if(file_exists(self::$tea->image))
            {
                unlink(self::$tea->image);
            }
        }
        self::$tea->delete();
        return back();
    }
}
