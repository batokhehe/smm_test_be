<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['data' => Employee::all(), 'messages' => 'Success', 'error' => false], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nik'   => 'required|unique:employees',
            'name'   => 'required|string|max:255',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation errors',
                'error' => true,
                'errors' => $validator->errors()
            ], 422);
        }

        $result = Employee::create($request->all());

        if($result){
            return response()->json(['message' => 'Data created.', 'error' => false], 201);
        } else {
            return response()->json(['message' => 'Data not found.', 'error' => true], 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $result = Employee::find($id);
        if($result){
            return response()->json(['data' => $result, 'message' => 'Data found.', 'error' => false], 200);
        } else {
            return response()->json(['message' => 'Data not found.', 'error' => true], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nik'   => 'required',
            'name'   => 'required|string|max:255',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation errors',
                'error' => true,
                'errors' => $validator->errors()
            ], 422);
        }
        
        $result = Employee::where('id', $id)
                    ->update($request->all());
        if($result){
            return response()->json(['message' => 'Data updated.', 'error' => false], 201);
        } else {
            return response()->json(['message' => 'Data not found.', 'error' => true], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Employee::find($id);
        if($data) {
            $data->delete();
            return response()->json(['message' => 'Data deleted.', 'error' => false], 200);
        } else {
            return response()->json(['message' => 'Data not found.', 'error' => true], 404);
        }
    }
}
