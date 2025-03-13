<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SupermarketSales;
use Illuminate\Support\Facades\DB;

class SupermarketSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = SupermarketSales::query();

        // Filter berdasarkan request
        if ($request->filled('branch')) {
            $query->where('branch', $request->branch);
        }

        // Sorting
        $validColumns = ['id', 'branch', 'city', 'product_line', 'quantity', 'total', 'date', 'time', 'gross_margin_percentage', 'gross_income'];
        $sortBy = $request->get('sortBy', 'id'); // Default sorting by ID
        $sortOrder = $request->get('sortOrder', 'asc'); // Default ascending

        if (!in_array($sortBy, $validColumns)) {
            $sortBy = 'id'; // Prevent SQL injection & invalid sorting
        }

        // Terapkan sorting
        $query->orderBy($sortBy, $sortOrder);

        // Pagination setelah filter & sorting
        $sales = $query->paginate(50)->appends($request->query());

        // Ambil opsi filter
        $branches = SupermarketSales::select('branch')->distinct()->orderBy('branch')->pluck('branch');
        
        return view('dashboard.supermarket_sales.index', compact(
            'sales',
            'branches'
        ));
        
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
