<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
// use DB;
use App\Order;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('editForm/addOrder');
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
    public function postValue(Request $request)
    {
        //
      Order::create([
            'name'=>$request->applicant,
            'project'=>$request->project,
            'adForm'=>$request->adForm,
            'template'=>$request->template,
            'description'=>$request->description,
            'number'=>$request->number,
            'status'=>'排件中',
            'principalPM'=>'Emily',
            'principalRD'=>'尚未指派',
        ]);
            return redirect('editForm/orderAll');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function orderAll(Request $request){
        return view('editForm/orderAll');
    }
  
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

    public function getOrders(Request $request) {
        $data = Order::all();
        $search = $request->get('search');
        $order = Order::query();
        if ($search['value']) {
            $order->where("id","=",$search['value']);
        }
        return new JsonResponse([
            
            "recordsTotal"   =>  $data->count(),
            "recordsFiltered"  =>  $data->count(),
            "data"       =>  $order->skip($request->get('start'))->take($request->get('length'))->get(),

        ]);
    }
    public function getDateOrders($id){
           $datas= Order::find($id);
                return new JsonResponse([
                    'data' =>$datas
                ]);
    }
    public function upDateOrders(Request $request){
     
           Order::where('id',"=", $request->id)
           ->update(['name' => $request->upDateName,
           'project' =>  $request->project,
           'adForm' => $request->adForm,
           'template' => $request->template,
           'number' => $request->orderNumber,
           'principalPM' => $request->PM,
           'principalRD' => $request->RD,
           'status'=> $request->upDateStatus,
           ]);

 }
}
