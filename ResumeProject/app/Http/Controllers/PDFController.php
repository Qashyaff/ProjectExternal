<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = [
            'title' => 'My Resume',
            'dateofbirth' => ('1-2-2000'),
            'Name'=>'AL-Luqman Qashyaff Bin Azmi',
            'phonenumber'=>'013-7316146'
            
            

            
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
    
        return $pdf->download('MyResume.pdf');
    }
}
