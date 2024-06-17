<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formdetail = Form::all();
        return view('index', compact('formdetail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('main');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
        //     'name' => 'required|string|max:255',
        //     'dob' => 'nullable|date',
        //     'gender' => 'required|string',
        //     'marital_status' => 'required|string',
        //     'mobile_number' => 'required|string|max:15',
        //     'email' => 'required|email|max:255',
        //     'address' => 'required|string|max:255',
        //     'applied_country' => 'nullable|string|max:255',
            'see.*' => 'nullable|string|max:255',
            'plus2.*' => 'nullable|string|max:255',
            'bachelors.*' => 'nullable|string|max:255',
            'masters.*' => 'nullable|string|max:255'
        //     'work_experience' => 'nullable|string|max:255',
        //     'test_taken' => 'required|integer',
        //     'score' => 'required|integer',
        //     'how_you_know' => 'nullable|string|max:255',
        //     'reference' => 'nullable|string|max:255',
        ]);
        
        $academic_details = [
            'see' => $request->input('see'),
            'plus2' => $request->input('plus2'),
            'bachelors' => $request->input('bachelors'),
            'masters' => $request->input('masters')
        ];
        // dd($academic_details);
        

        $formdetail=new Form();
        $formdetail->name=$request->get('name');
        $formdetail->dob=$request->get('dob');
        $formdetail->gender=$request->get('gender');
        $formdetail->marital_status=$request->get('marital_status');
        $formdetail->mobile_number=$request->get('mobile_number');
        $formdetail->email=$request->get('email');
        $formdetail->address=$request->get('address');
        $formdetail->applied_country=$request->get('applied_country');
        $formdetail->work_experience=$request->get('work_experience');
        $formdetail->test_taken=$request->get('test_taken');
        $formdetail->score=$request->get('score');
        $formdetail->how_you_know=$request->get('how_you_know');
        $formdetail->reference=$request->get('reference');
        $formdetail->academic_details=json_encode($academic_details);
        $status=$formdetail->save();
        // dd($status); 
        if($status){
            return redirect()->route('form.index')->with('success','members added successfylly');
        }
        else{
            return redirect()->back()->with('error','failed to add members');
        }
        // Form::create([
        //     'name' => $validated['name'],
        //     'dob' => $validated['dob'],
        //     'gender' => $validated['gender'],
        //     'marital_status' => $validated['marital_status'],
        //     'mobile_number' => $validated['mobile_number'],
        //     'email' => $validated['email'],
        //     'address' => $validated['address'],
        //     'applied_country' => $validated['applied_country'],
        //     'work_experience' => $validated['work_experience'],
        //     'test_taken' => $validated['test_taken'],
        //     'score' => $validated['score'],
        //     'how_you_know' => $validated['how_you_know'],
        //     'reference' => $validated['reference'],
        //     'academic_details' => $academic_details
        // ]);
        // // FormSubmission::create($request->all());
        // return redirect()->route('form.index')->with('success', 'Form submission created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $formdetail = Form::find($id);
        // dd(json_decode($formdetail->academic_details));
        return view('edit', compact('formdetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        // $request->validate([
        //         'name' => 'required|string|max:255',
        //         'dob' => 'nullable|date',
        //         'gender' => 'required|string',
        //         'marital_status' => 'required|string',
        //         'mobile_number' => 'required|string|max:15',
        //         'email' => 'required|email|max:255',
        //         'address' => 'required|string|max:255',
        //         'applied_country' => 'nullable|string|max:255',
        //         'see.*' => 'nullable|string|max:255',
        //         'plus2.*' => 'nullable|string|max:255',
        //         'bachelors.*' => 'nullable|string|max:255',
        //         'masters.*' => 'nullable|string|max:255',
        //         'work_experience' => 'nullable|string|max:255',
        //         'test_taken' => 'required|integer',
        //         'score' => 'required|integer',
        //         'how_you_know' => 'nullable|string|max:255',
        //         'reference' => 'nullable|string|max:255',
        //     ]);
            
            $academic_details = [
                'see' => $request->input('see'),
                'plus2' => $request->input('plus2'),
                'bachelors' => $request->input('bachelors'),
                'masters' => $request->input('masters')
            ];
            // dd($academic_details);
            
    
            $formdetail=Form::find($id);
            $formdetail->name=$request->get('name');
            $formdetail->dob=$request->get('dob');
            $formdetail->gender=$request->get('gender');
            $formdetail->marital_status=$request->get('marital_status');
            $formdetail->mobile_number=$request->get('mobile_number');
            $formdetail->email=$request->get('email');
            $formdetail->address=$request->get('address');
            $formdetail->applied_country=$request->get('applied_country');
            $formdetail->work_experience=$request->get('work_experience');
            $formdetail->test_taken=$request->get('test_taken');
            $formdetail->score=$request->get('score');
            $formdetail->how_you_know=$request->get('how_you_know');
            $formdetail->reference=$request->get('reference');
            $formdetail->academic_details=json_encode($academic_details);
            $status=$formdetail->save();
            // dd($status); 
            if($status){
                return redirect()->route('form.index')->with('success','members updated successfylly');
            }
            else{
                return redirect()->back()->with('error','failed to update members');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $formdetail = Form::find($id);
        $status= $formdetail->delete();
        if($status){
            return redirect()->route('form.index')->with('Success','members deleted successfully');
        }
        else{
            return redirect()->back()->with('error','problem in deleting members');
        }
    }



//     public function getAcademicDetails($id)
// {
//     $formdetail = Form::find($id);
//     $academic_details = json_decode($formdetail->academic_details, true);

//     $details = [
//         [
//             'degree' => 'SLC / SEE',
//             'major' => '',
//             'institution' => $academic_details['see']['school'] ?? '',
//             'score' => $academic_details['see']['grade'] ?? '',
//             'year' => $academic_details['see']['year'] ?? ''
//         ],
//         [
//             'degree' => '10+2/CTEVT/PCT',
//             'major' => $academic_details['plus2']['stream'] ?? '',
//             'institution' => $academic_details['plus2']['college'] ?? '',
//             'score' => $academic_details['plus2']['grade'] ?? '',
//             'year' => $academic_details['plus2']['year'] ?? ''
//         ],
//         [
//             'degree' => 'Bachelor',
//             'major' => $academic_details['bachelors']['stream'] ?? '',
//             'institution' => $academic_details['bachelors']['college'] ?? '',
//             'score' => $academic_details['bachelors']['grade'] ?? '',
//             'year' => $academic_details['bachelors']['year'] ?? ''
//         ],
//         [
//             'degree' => 'Master',
//             'major' => $academic_details['masters']['stream'] ?? '',
//             'institution' => $academic_details['masters']['college'] ?? '',
//             'score' => $academic_details['masters']['grade'] ?? '',
//             'year' => $academic_details['masters']['year'] ?? ''
//         ]
//     ];

//     return response()->json($details);
// }
}
