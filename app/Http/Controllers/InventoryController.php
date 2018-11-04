<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Model\Inventory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // get all the nerds
        $inventories= Inventory::all();

        // load the view and pass the nerds
        return View('inventory_management.index',compact('inventories')) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return View('inventory_management.create');
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
         $fileName = 'null';
        if (Input::file('product_image')->isValid()){
            $fileName=Storage::disk('uploads')->put('/inventory',Input::file('product_image'));
        }
       
        $arr=$request->all();
        $arr['product_image']  = $fileName;
        $inventories = Inventory::create($arr);
        
        if( $inventories){
        return redirect()->route('inventory.index');
        }
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
        $inventories= Inventory::find($id);

      return View('inventory_management.show',compact('inventories')) ;

    
    
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
        $inventories = Inventory::find($id);
        return View('inventory_management.edit',compact('inventories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        Inventory::find($request->inventory_id)->update($request->all());;
        return redirect('inventory');
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
        $inventories = Inventory::find($id);
        $inventories->delete();
        return Redirect('inventory');
    }


    public function search(Request $request)   
{
        
          $query = $request->search;

          // Returns an array of articles that have the query string located somewhere within 
          // our articles titles. Paginates them so we can break up lots of search results.
          $inventories = DB::table('inventories')
                     ->where('product_name', 'LIKE', '%' . $query . '%')
                     ->orWhere('unit_price', 'like', '%'.$query.'%')
                     ->orWhere('amount', 'like', '%'.$query.'%')
                     ->orWhere('total', 'like', '%'.$query.'%')
                     ->orWhere('created_date', 'like', '%'.$query.'%')
                     ->orWhere('expired_date', 'like', '%'.$query.'%')
                     ->orWhere('description', 'like', '%'.$query.'%')
                     ->orWhere('product_image', 'like', '%'.$query.'%')
                     ->orderBy('id', 'desc')
                     ->paginate(10);
              
          // returns a view and passes the view the list of articles and the original query.
          return View('inventory_management.index',compact('inventories'));
 }

}
