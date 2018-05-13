<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    function search(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $name = $request->get('name');
            if($name != '')
            {
                $data = Property::where('name', 'like', '%' . $name . '%')
                    ->orderBy('price', 'desc')
                    ->get();
            }
            else
            {
                $data = Property::all()
                    ->orderBy('price', 'desc')
                    ->get();
            }



            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
        <tr>
         <td>'.$row->name.'</td>
         <td>'.$row->price.'</td>
         <td>'.$row->bedrooms.'</td>
         <td>'.$row->bathrooms.'</td>
         <td>'.$row->storeys.'</td>
         <td>'.$row->garages.'</td>
        </tr>
        ';
                }
            }
            else
            {
                $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }
}
