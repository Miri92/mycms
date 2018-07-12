<?php
/**
 * Created by PhpStorm.
 * User: saka-muka
 * Date: 02-Apr-18
 * Time: 12:00 PM
 */

namespace Miri92\Mycms\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{

    private $route_name;
    private $get_conf_validations;

    public function __construct(){
        $route = Route::current();

        $this->route_name = $route->action['name'];

        $this->get_conf_validations = config('mycms.crud.'.$this->route_name.'.validations');
    }

    public function index(){
        //return 'index';

        return view('mycms::post.add');
    }

    public function create(){

        //echo "Route::current() - ". $name;
        //echo "route->action['name'] - ". $route->action['name'];
        //dd($route);

        //echo route('posts.create');

        //echo $this->route_name.'.validations';

        //dd($this->get_conf_validations);

        return view('mycms::post.add');
    }

    public function store(Request $request){
        //dd($request->all());



        $validator = Validator::make($request->all(),$this->get_conf_validations);

        if ($validator->fails()) {

            return view('mycms::post.add', ['errors'=>$validator->errors()]);

        } else {
            return 'not fails';
        }




        //return  $validatedData;
    }

    public function edit(){

    }

    public function update(){

    }

}