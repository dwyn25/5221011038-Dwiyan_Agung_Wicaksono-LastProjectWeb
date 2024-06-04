<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    
    
    public function totalIncomeOneMonth()
    {
        $now = now();
        $startOfMonth = $now->startOfMonth()->toDateString();
        $endOfMonth = $now->endOfMonth()->toDateString();

        // $totalIncome = Orders::whereBetween('orderDate', [$startOfMonth, $endOfMonth])->sum('totalAmount');
        $totalIncome = 0;
    }

    public function totalIncomeAll()
    {
        // $totalIncome = Orders::sum('totalAmount');
        $totalIncome = 0;
        return $totalIncome;
    }

    public function totalCompletedOrders()
    {

        $persentase = 0;
        return $persentase;
    }

    
    public function totalProcessingOrders()
    {
        // $totalProcessingOrders = Orders::where('status', 0)->count();

        $totalProcessingOrders = 0;
        return $totalProcessingOrders;
    }

    public function index()
    {
        return view('admin.login');
    }


    


    public function logout()
    {
        session()->forget('user');
        return redirect()->route('admin.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

       
        
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            
            session(['user' => $user]);
            return redirect()->route('products.index'); // Redirect to the dashboard or another protected route
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
    public function store(Request $request)
    {
        
    }

  
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
