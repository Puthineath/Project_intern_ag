<?php

namespace App\Http\Controllers;

use App\Model\Employee;
use Illuminate\Http\Request;
use \QRCode;
use DB;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     * Url : /employee method (get)
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return View('hr_management.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
         return View('hr_management.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = Employee::create($request->all());

        return redirect()->route('employee.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
       return view('hr_management.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return View('hr_management.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    

        Employee::find($request->employee_id)->update($request->all());
       

        return redirect()->route('employee.index')
                ->withSuccess('Updated!!');
                // ->with('success','Updated !!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        
        return redirect()->route('employee.index')
                ->withSuccess('Deleted!!');
        
    }
    public function createqr($id){
        $employee = Employee::findOrFail($id);

        $firstName = $employee->first_name;
        $lastName = $employee->last_name;
        $title = '';
        $email = $employee->email;
        
        // Addresses
        $homeAddress = [
            'type' => '',
            'pref' => '',
            'street' => '',
            'city' => '',
            'state' => '',
            'country' => '',
            'zip' => ''
        ];
        $wordAddress = [
            'type' => '',
            'pref' => false,
            'street' => '',
            'city' => '',
            'state' => '',
            'country' => '',
            'zip' => ''
        ];
        
        $addresses = [$homeAddress, $wordAddress];
        
        // Phones
        $workPhone = [
            'type' => '',
            'number' => '',
            'cellPhone' => false
        ];
        $homePhone = [
            'type' => '',
            'number' => '',
            'cellPhone' => false
        ];
        $cellPhone = [
            'type' =>  '',
            'number' => $employee->phone_number,
            'cellPhone' => true
        ];
        
        $phones = [$workPhone, $homePhone, $cellPhone];

        QRCode::vCard($firstName, $lastName, $title, $email, $addresses, $phones)
                ->setOutfile($firstName.'.svg')
                ->setErrorCorrectionLevel('H')
                ->setSize(4)
                ->setMargin(2)
                ->svg();



    }


     public function search(Request $request)   
{
     
          $query = $request->search;

          // Returns an array of articles that have the query string located somewhere within 
          // our articles titles. Paginates them so we can break up lots of search results.
          $employees = DB::table('employee')
                     ->where('first_name', 'LIKE', '%' . $query . '%')
                     ->orWhere('last_name', 'like', '%'.$query.'%')
                     ->orWhere('email', 'like', '%'.$query.'%')
                     ->orWhere('department', 'like', '%'.$query.'%')
                     ->orWhere('position', 'like', '%'.$query.'%')
                     ->orWhere('phone_number', 'like', '%'.$query.'%')
                     ->orderBy('id', 'desc')
                     ->paginate(10);
              
          // returns a view and passes the view the list of articles and the original query.
          return View('hr_management.index',compact('employees'));
 }

}
