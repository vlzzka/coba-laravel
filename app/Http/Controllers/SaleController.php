<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $query = Sale::query();
  
    if ($request->filled('brand')) {
        $query->where('brand', $request->brand);
    }

    if ($request->filled('processor')) {
        $query->where('processor', $request->processor);
    }

    if ($request->filled('ram_gb')) {
        $query->where('ram_gb', $request->ram_gb);
    }

    if ($request->filled('storage')) {
        $query->where('storage', $request->storage);
    }

    if ($request->filled('gpu')) {
        $query->where('gpu', $request->gpu);
    }

    // Sorting
    $validColumns = ['id', 'brand', 'processor', 'ram_gb', 'storage', 'gpu', 'weight_kg', 'price_usd'];
    $sortBy = $request->get('sortBy', 'id'); // Default sorting by ID
    $sortOrder = $request->get('sortOrder', 'asc'); // Default ascending

    // Pastikan sorting hanya berdasarkan kolom yang valid
    if (!in_array($sortBy, $validColumns)) {
        $sortBy = 'id';
    }

    $sales = $query->orderBy($sortBy, $sortOrder)->paginate(100);
    $sales = $query->paginate(100);

    $brands = Sale::select('brand')->distinct()->pluck('brand');
    $processors = Sale::select('processor')->distinct()->pluck('processor');
    $ramOptions = Sale::select('ram_gb')->distinct()->pluck('ram_gb');
    $storageOptions = Sale::select('storage')->distinct()->pluck('storage');
    $gpuOptions = Sale::select('gpu')->distinct()->pluck('gpu');

    return view('dashboard.sales.index', compact('sales', 'brands', 'processors', 'ramOptions', 'storageOptions', 'gpuOptions'))->with('sortBy', $sortBy)->with('sortOrder', $sortOrder);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
