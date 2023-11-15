<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Purchase;
use DB;
class DashboardController extends Controller
{
    //
    public function index(){
        $totalAmount = Payment::join('invoices', 'payments.invoice_id', '=', 'invoices.id')
    ->where('invoices.status', 1)
    ->sum('payments.total_amount');
    $pendingInvoices = Invoice::where('status', 0)->count();
    $customersCount = Customer::distinct('mobile_no')->count('mobile_no');
    $purchases= Purchase::where('status', 1)->sum('buying_price');
    $purchase = Purchase::select('id', 'date', 'transaction_type', DB::raw('buying_price as total_amount'))
    ->where('status', '=', 0)
    ->get();

    $invoices = Invoice::select('invoices.id','invoices.date', 'invoices.transaction_type', DB::raw('SUM(payments.total_amount) as total_amount'))
    ->leftJoin('payments', 'invoices.id', '=', 'payments.invoice_id')
    ->where('invoices.status', '=', 0)
    ->groupBy('invoices.id', 'invoices.transaction_type')
    ->get();
    $combinedResults = $purchase->merge($invoices)->sortByDesc('date');


    // dd($invoices);
    // dd($purchase->pluck('id')->toArray());




        //  dd($totalAmount);

    // return view('backend.invoice.print_invoice_list',compact('allData'));
 // End Method
        return view('admin.index',compact('totalAmount','pendingInvoices','customersCount','purchases','combinedResults'));
    }
}

