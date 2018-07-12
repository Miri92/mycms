<?php

namespace Miri92\Mycms\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Miri92\Mycms\Models\Menu;

class MenuController extends Controller
{

    public function parseJsonArray($jsonArray, $parentID = 0) {
        $return = array();
        foreach ($jsonArray as $subArray) {
            $returnSubSubArray = array();
            if (isset($subArray->children)) {
                $returnSubSubArray = $this->parseJsonArray($subArray->children, $subArray->id);
            }
            $return[] = array(
                'id' => $subArray->id,
                'name' => $subArray->name,
                'parent_id' => $parentID
            );
            $return = array_merge($return, $returnSubSubArray);
        }
        return $return;
    }


    public function get_menu($items,$class = 'dd-list'){
        $html = "<ol class=\"".$class."\" id=\"menu-id\">";
        foreach($items as $key=>$value) {
            $html.= '<li class="dd-item dd3-item" data-id="'.$value['id'].'" >';
            $html.= 'item';
            if(array_key_exists('children',$value)) {
                $html .= $this->get_menu($value['children'],'children');
            }
            $html .= "</li>";
        }
        $html .= "</ol>";
        return $html;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::latest()
            ->get();
        //dd($menus);

        $ref   = [];
        $items = [];

        foreach ($menus as $data) {
            //echo $data->parent_id;

            $thisRef = &$ref[$data->id];

            $thisRef['parent'] = $data->parent_id;
            $thisRef['name'] = $data->name;
            $thisRef['link'] = $data->link;
            $thisRef['id'] = $data->id;
            if($data->parent_id == 0) {
                $items[$data->id] = &$thisRef;
            } else {
                $ref[$data->parent_id]['children'][$data->id] = &$thisRef;
            }

            //echo $menu->id;

        }

        //dd($items);


        //dd($readbleArray);

        //print $this->get_menu($items);


        return view('mycms::menu.index',['menus'=>$items]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = Menu::create($request->all());
        $model->save();


        return redirect()->back();
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
    public function update(Request $request )
    {
        $json = $request->input('json');
        $json = json_decode($json);

        $readbleArray = $this->parseJsonArray($json);
        //dd($readbleArray);
        //$model = Menu;

        foreach ($readbleArray as $item){

            //echo $item['id'] . ' - ' . $item['name'] . "<br>";
            Menu::where('id',$item['id'])
                ->update([
                    'name' => $item['name'],
                    'parent_id' => $item['parent_id'],
                ]);
        }

        //return $request->all();
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
}
