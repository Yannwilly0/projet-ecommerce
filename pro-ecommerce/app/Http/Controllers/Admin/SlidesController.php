<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SlidesController extends Controller
{
    //
    public function edit_home()
    {
        $data['slide1'] = Slider::where('id',1)->first();
        $data['slide2'] = Slider::where('id',2)->first();
		return view('admin.sliders.home.edit',['data'=>$data]);
    }

    public function edit_home_slider(Request $request)
    {
          //VALIDATE DATA
          $this->validate($request, [
            'titre1' => ['required'],
            'description1' => ['required'],
            'titre2' => ['required'],
            'description2' => ['required'],
        ]);
        try
        {
            if ($request->hasFile('image1')) 
                    {
                        $slide1nameWithExt = $request->file('image1')->getClientOriginalName();
                        //Get just filename
                        $slide1name = pathinfo($slide1nameWithExt, PATHINFO_FILENAME);
                        //Get just ext
                        $slide1extension = $request->file('image1')->getClientOriginalExtension();
                        //upload Image
                        $slide1NameToStore = 'slide1'.'_'.time().'.'.$slide1extension;
                        // upload Image
                        $slide1path = $request->file('image1')->storeAs('public/images/slides',$slide1NameToStore);

                        Slider::where('id',1)
                      ->update(
                          [
                              'slider_img' => $slide1NameToStore,
                          ]
                      );
                        
            }

            if ($request->hasFile('image2')) 
            {
                $slide2nameWithExt = $request->file('image2')->getClientOriginalName();
                //Get just filename
                $slide2name = pathinfo($slide2nameWithExt, PATHINFO_FILENAME);
                //Get just ext
                $slide2extension = $request->file('image2')->getClientOriginalExtension();
                //upload Image
                $slide2NameToStore = 'slide2'.'_'.time().'.'.$slide2extension;
                // upload Image
                $slide2path = $request->file('image2')->storeAs('public/images/slides',$slide2NameToStore);

                Slider::where('id',2)
                      ->update(
                          [
                              'slider_img' => $slide2NameToStore,
                          ]
                      );
                
            }   

            Slider::where('id',1)
            ->update(
                [
                    'title' => $request->input('titre1'),
                    'description'=>$request->input('description1'),
                ]
            );

            Slider::where('id',2)
            ->update(
                [
                    'title' => $request->input('titre2'),
                    'description'=>$request->input('description2'),
                ]
            );

            $notification=array(
                'message'=>'Slides updated Successfully',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
        catch(\Exception $e)
        {
            $notification=array(
                'message'=>strval($e),
                'alert-type'=>'error'
            );
            //print_r($e);
            return Redirect()->back()->with($notification);
        }
    }
}
