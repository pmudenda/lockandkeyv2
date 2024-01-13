<?php

namespace Modules\Store\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Store\Entities\Unit;

class   StoresController extends Controller
{

    public function index() {
        $units = Unit::all();

        return view('store::stores.index', [
            'units' => $units
        ]);
    }

    public function create() {
        return view('store::stores.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name'       => 'required|string|max:255',
            'short_name' => 'required|string|max:255'
        ]);

        Unit::create([
            'name'            => $request->name,
            'short_name'      => $request->short_name,
            'operator'        => $request->operator,
            'operation_value' => $request->operation_value,
        ]);

        toast('Unit Created!', 'success');

        return redirect()->route('stores.index');
    }

    public function edit(Unit $unit) {
        return view('store::stores.edit', [
            'unit' => $unit
        ]);
    }

    public function update(Request $request, Unit $unit) {
        $request->validate([
            'name'       => 'required|string|max:255',
            'short_name' => 'required|string|max:255'
        ]);

        $unit->update([
            'name'            => $request->name,
            'short_name'      => $request->short_name,
            'operator'        => $request->operator,
            'operation_value' => $request->operation_value,
        ]);

        toast('Unit Updated!', 'info');

        return redirect()->route('stores.index');
    }

    public function destroy(Unit $unit) {
        $unit->delete();

        toast('Unit Deleted!', 'warning');

        return redirect()->route('stores.index');
    }
}
