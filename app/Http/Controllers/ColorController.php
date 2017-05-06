<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ColorsRequest;
use App\Colors;

class ColorController extends Controller
{
    public function index()
    {
        $data=Colors::all();
        return view('admin.color.listcolor', compact('data'));
    }
    public function create()
    {
        $data=Colors::all();
        $parent=Colors::select('Color_name', 'id', 'Status')->get()->toArray();
        return view('admin.color.addcolor', compact('data', 'parent'));
    }
    public function store(ColorsRequest $request)
    {
        $color=new Colors;
        $color->Color_name = $request->color;
        $time = time();
        $color->created_at=$time;
        $color->updated_at=$time;
        $color->Status=$request->status;
        $color->save();
        return redirect()->route('color-list.index')
        ->with(['flash_level' => 'primary', 'flash_message' => 'Thêm danh mục thành công']) ;
    }
    public function destroy($id)
    {
          $color=Colors::findOrFail($id);
          $color->delete();
          return redirect()->route('color-list.index');
    }
    public function edit(Request $request)
    {
        $data=Colors::find($request->id);
        $parent=Colors::select('Color_name', 'id', 'Status')->get()->toArray();
        return view('admin.color.updatecolor', compact('data', 'parent'));
    }
    public function xem(Request $request)
    {
          $data = Colors::where('id', $request->id)
          ->select('id', 'Color_name', 'Status', 'created_at', 'updated_at')->get();
          $parent = Colors::select('Color_name', 'id', 'Status')->get()->toArray();
         return view('admin.color.viewcolor', compact('data', 'parent'));
    }
    public function update($id, Request $request)
    {
          $color=Colors::find($id);
          $color->Color_name=$request->color;
          $color->Status=$request->status;
          $time = time();
          $color->created_at=$time;
          $color->updated_at=$time;
          $color->save();
          return redirect()->route('color-list.index');
    }
}
