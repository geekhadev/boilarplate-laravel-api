<?php

namespace App\Http\Controllers\Api\Tracking;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Tracking\DeviceStoreRequest;
use App\Http\Requests\Api\Tracking\DeviceUpdateRequest;
use App\Models\Tracking\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index(Request $request)
    {
        $devices = Device::query();

        if ($request->filled('search')) {
            $search = strtolower($request->search);
            $devices->where(function ($query) use ($search) {
                $query->whereRaw('LOWER(name) LIKE ?', ["%$search%"]);
            });
        }

        if ($request->has('filters') && is_array($request->filters)) {
            foreach ($request->filters as $field => $value) {
                if (! empty($value)) {
                    $devices->whereRaw('LOWER('.$field.') LIKE ?', ['%'.strtolower($value).'%']);
                }
            }
        }

        if ($request->has('orderBy') && ! empty($request->orderBy)) {
            $orderType = $request->input('orderType', 'asc');
            $devices->orderBy($request->orderBy, $orderType);
        }

        // Paginar los resultados
        $perPage = $request->input('perPage', 10);
        $devices = $devices->paginate($perPage);

        return response()->json($devices);
    }

    public function show(string $id)
    {
        $device = Device::find($id);

        if (! $device) {
            return response()->json(null, 404);
        }

        return response()->json($device);
    }

    public function store(DeviceStoreRequest $request)
    {
        $device = Device::create($request->all());

        return response()->json($device, 201);
    }

    public function update(DeviceUpdateRequest $request, string $id)
    {
        $device = Device::find($id);

        if (! $device) {
            return response()->json(null, 404);
        }

        $device->update($request->all());

        return response()->json($device, 200);
    }

    public function destroy(string $id)
    {
        $device = Device::findOrFail($id);
        $device->delete();

        return response()->json(null, 204);
    }
}
