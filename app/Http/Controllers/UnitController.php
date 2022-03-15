<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Unit;
 

use Illuminate\Http\Request;

class UnitController extends Controller
{
    //
  
    private $units;
    private $unit;

    public function index()
    {
        return view('admin.unit.add');
    }

    public function create(Request $request)
    {
        Unit::newUnit($request);
        return redirect()->back()->with('message', 'Unit Added Successfully');
    }

    public function manage()
    {
        $this->units = Unit::orderBy('id', 'desc')->get();
        return view('admin.unit.manage', ['unit' => $this->units]);
    }

    public function edit($id)
    {
        $this->unit = Unit::find($id);
        return view('admin.unit.edit', ['unit' => $this->unit]);
    }

    public function update(Request $request, $id)
    {
        Unit::updateUnit($request, $id);
        return redirect('/manage-unit')->with('message', 'Update Successfully');
    }

    public function delete(Request $request, $id)
    {
        Unit::deleteUnit($id);
        return redirect('/manage-unit')->with('message', 'Unit info delete successfully');
    }

}
