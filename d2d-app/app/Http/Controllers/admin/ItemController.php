<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use \App\Item;
use Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::user()->id;
        if($userid==1){
           $item = \App\Item::get();
        } else {
           $item = \App\Item::where('user_id',$userid)->get();
        }
        
        return view('admin.item.index',compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request)
    {
        $success = $request->session()->get('success');
        return view('admin.item.create',compact('success'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $getAll  = \App\item::where('item','0')->get();

        // print $getAll->id;
        // exit;

        $this->validate($request, [
            'item_title' => 'required',       
            'category_id' => 'required',       
            'brand' => 'required',       
            'price_1' => 'required',       
            'dis_price_1' => 'required',       
            'size_1' => 'required',       
            'qty_1' => 'required',       
            'max_1' => 'required',       
        ]);


        $userid = Auth::user()->id;

        $item = new \App\Item;
        $item->user_id = $userid;
        $item->category_id = $request->category_id;
        $item->item_title = $request->item_title;
        $item->brand = $request->brand;
        $item->short_desc = $request->short_desc;
        $item->text = $request->text;
        $item->delivery_area = $request->delivery_area;
        $item->video = $request->video;

        $item->price_1 = $request->price_1;
        $item->dis_price_1 = $request->dis_price_1;
        $item->size_1 = $request->size_1;
        $item->qty_1 = $request->qty_1;
        $item->max_1 = $request->max_1;


        $item->price_2 = $request->price_2 ?: null;
        $item->dis_price_2 = $request->dis_price_2 ?: null;;
        $item->size_2 = $request->size_2 ?: null;;
        $item->qty_2 = $request->qty_2 ?: null;;
        $item->max_2 = $request->max_2 ?: null;;


        $item->price_3 = $request->price_3 ?: null;;
        $item->dis_price_3 = $request->dis_price_3 ?: null;;
        $item->size_3 = $request->size_3 ?: null;;
        $item->qty_3 = $request->qty_3 ?: null;;
        $item->max_3 = $request->max_3 ?: null;;

        $item->price_4 = $request->price_4 ?: null;;
        $item->dis_price_4 = $request->dis_price_4 ?: null;;
        $item->size_4 = $request->size_4 ?: null;;
        $item->qty_4 = $request->qty_4 ?: null;;
        $item->max_4 = $request->max_4 ?: null;;

        $item->tab_title_1 = $request->tab_title_1;
        $item->tab_title_2 = $request->tab_title_2;
        $item->tab_title_3 = $request->tab_title_3;
        $item->tab_title_4 = $request->tab_title_4;
        $item->tab_title_5 = $request->tab_title_5;
        $item->tab_title_6 = $request->tab_title_6;

        $item->tab_text_1 = $request->tab_text_1;
        $item->tab_text_2 = $request->tab_text_2;
        $item->tab_text_3 = $request->tab_text_3;
        $item->tab_text_4 = $request->tab_text_4;
        $item->tab_text_5 = $request->tab_text_5;
        $item->tab_text_6 = $request->tab_text_6;

        $item->status = "1";
        $item->row_order = "1";

        if($request->hasFile('photo')) { 
            $item->photo = $request->file('photo')->store('uploads/'.date('Y-m-d'));
        } else {
            $item->photo = "";
        }
        if($request->hasFile('image_2')) { 
            $item->image_2 = $request->file('image_2')->store('uploads/'.date('Y-m-d'));
        } else {
            $item->image_2 = "";
        }

        if($request->hasFile('image_3')) { 
            $item->image_3 = $request->file('image_3')->store('uploads/'.date('Y-m-d'));
        } else {
            $item->image_3 = "";
        }
        if($request->hasFile('image_4')) { 
            $item->image_4 = $request->file('image_4')->store('uploads/'.date('Y-m-d'));
        } else {
            $item->image_4 = "";
        }

        if($request->hasFile('image_1')) { 
            $item->image_1 = $request->file('image_1')->store('uploads/'.date('Y-m-d'));
        }  else {
            $item->image_1 = "";
        }
        
        if($item->save()){
            return redirect('la-admin/item/create')->with(['success'=>'true']);
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
        //$userid = Auth::user()->id;
        $item  = \App\Item::where('id',$id)->first();
        return view('admin.item.edit',compact('item'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $success = $request->session()->get('success');
        return view('admin.item.edit',compact('success'));
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
        $item  = \App\Item::where('id',$id)->first();

        $item->category_id = $request->category_id;
        $item->item_title = $request->item_title;
        $item->brand = $request->brand;
        $item->short_desc = $request->short_desc;
        $item->text = $request->text;
        $item->delivery_area = $request->delivery_area;
        $item->video = $request->video;
        $item->price_1 = $request->price_1;
        $item->dis_price_1 = $request->dis_price_1;
        $item->size_1 = $request->size_1;
        $item->qty_1 = $request->qty_1;
        $item->max_1 = $request->max_1;
        $item->price_2 = $request->price_2;
        $item->dis_price_2 = $request->dis_price_2;
        $item->size_2 = $request->size_2;
        $item->qty_2 = $request->qty_2;
        $item->max_2 = $request->max_2;
        $item->price_3 = $request->price_3;
        $item->dis_price_3 = $request->dis_price_3;
        $item->size_3 = $request->size_3;
        $item->qty_3 = $request->qty_3;
        $item->max_3 = $request->max_3;
        $item->price_4 = $request->price_4;
        $item->dis_price_4 = $request->dis_price_4;
        $item->size_4 = $request->size_4;
        $item->qty_4 = $request->qty_4;
        $item->max_4 = $request->max_4;

        $item->tab_title_1 = $request->tab_title_1;
        $item->tab_title_2 = $request->tab_title_2;
        $item->tab_title_3 = $request->tab_title_3;
        $item->tab_title_4 = $request->tab_title_4;
        $item->tab_title_5 = $request->tab_title_5;
        $item->tab_title_6 = $request->tab_title_6;

        $item->tab_text_1 = $request->tab_text_1;
        $item->tab_text_2 = $request->tab_text_2;
        $item->tab_text_3 = $request->tab_text_3;
        $item->tab_text_4 = $request->tab_text_4;
        $item->tab_text_5 = $request->tab_text_5;
        $item->tab_text_6 = $request->tab_text_6;

        $item->status = "1";
        $item->row_order = "1";

        if($request->hasFile('photo')) { 
            $item->photo = $request->file('photo')->store('uploads/'.date('Y-m-d'));
        }
        if($request->hasFile('image_2')) { 
            $item->image_2 = $request->file('image_2')->store('uploads/'.date('Y-m-d'));
        }
        if($request->hasFile('image_3')) { 
            $item->image_3 = $request->file('image_3')->store('uploads/'.date('Y-m-d'));
        }
        if($request->hasFile('image_4')) { 
            $item->image_4 = $request->file('image_4')->store('uploads/'.date('Y-m-d'));
        }

        if($request->hasFile('image_1')) { 
            $item->image_1 = $request->file('image_1')->store('uploads/'.date('Y-m-d'));
        }  else {
            $item->image_1 = "";
        }




        $item->save();
        return redirect('la-admin/item/'.$id)->with(['success'=>'true']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $check  = \App\item::where('menu_levels',$id)->first();
        // $obj = json_decode($check);

        // if($obj->{'id'}==null){
        //     $item  = \App\item::where('id',$id)->first();
        //     $item->delete();
        //     return redirect()->back();
        // } else {
        //     return redirect()->back();
        // }


            $item  = \App\Item::where('id',$id)->first();
            $item->delete();
            return redirect()->back();


    }


    public function status(Request $request, $id){
        if($request->status!=""){
            if($request->status=="1"){
                $request->status = "0";
            } else {
                $request->status = "1";
            }
        }
        $item  = \App\Item::where('id',$id)->first();
        $item->status = $request->status;

        $item->save();
        return redirect('la-admin/item');
    }

}
