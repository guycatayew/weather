<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Weather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $cities = City::all();
        $query = Weather::with(['city']);

        if (isset($request->city_id))
            $query->where('city_id', $request->city_id);
        if (isset($request->from))
            $query->where(DB::raw('updated_at::date'), '>=', $request->from);
        if (isset($request->to))
            $query->where(DB::raw('updated_at::date'), '<=', $request->to);
        if (isset($request->temperature))
            $query->where('temperature', $request->temperature);
        if (isset($request->feel))
            $query->where('feel', $request->feel);

        $weather = $query->latest()->paginate(10);

        return view('welcome', compact(['weather', 'cities']));
    }

    public function index_admin()
    {
        return view('dashboard');
    }

    public function edit($id)
    {
        $weather = Weather::with(['city'])->whereId($id)->first();
        return response()->json($weather);
    }

    public function update_weather(Request $request)
    {
        Weather::whereId($request->id)
            ->update([
                'feel' => $request->feel,
                'humidity' => $request->humidity,
                'temperature' => $request->temperature]);
        return response()->json(['message' => 'UPDATED']);
    }
}
