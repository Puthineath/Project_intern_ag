<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Model\Crop;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

class CropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        // get all the nerds
        $crops= Crop::all();

        // load the view and pass the nerds
        return View('crop_management.index',compact('crops')) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $crops= Crop::all();

         return View('crop_management.index',compact('crops')) ;
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
        if (Input::file('crop_image')->isValid()){
            $fileName=Storage::disk('uploads')->put('/crop',Input::file('crop_image'));
        }
       
        $arr=$request->all();
        $arr['crop_image']  = $fileName;
        $crops = Crop::create($arr);
        
        if($crops){
          
            return redirect()->route('crops.index');
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
        $crops= Crop::find($id);

      return View('crop_management.show',compact('crops')) ;

    
    
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
        $crops = Crop::find($id);
        return View('crop_management.edit',compact('crops'));

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
        Crop::find($request->crop_id)->update($request->all());
        return redirect('crops');
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
        $crops = Crop::find($id);
        $crops->delete();
        return Redirect('crops');
    }


    public function search(Request $request)   
{
          // Gets the query string from our form submission 
         
          $query = $request->search;

          // Returns an array of articles that have the query string located somewhere within 
          // our articles titles. Paginates them so we can break up lots of search results.
          $crops = DB::table('crops')
                     ->where('crop_name', 'LIKE', '%' . $query . '%')
                     ->orWhere('season_name', 'like', '%'.$query.'%')
                     ->orWhere('process', 'like', '%'.$query.'%')
                     ->orWhere('season_manager', 'like', '%'.$query.'%')
                     ->orWhere('description', 'like', '%'.$query.'%')
                     ->orderBy('id', 'desc')
                     ->paginate(10);
              
          // returns a view and passes the view the list of articles and the original query.
          return View('crop_management.index',compact('crops'));
 }

}
