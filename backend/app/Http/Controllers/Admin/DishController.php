<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Dish;
use App\Restaurant;

class DishController extends Controller
{

    protected $validationRule = [
        "name" => "required|string|max:100",
        "description" => "nullable|string",
        "price" => "required|numeric",
        "visible" => "sometimes|accepted",
        "image" => "nullable|mimes:jpg,jpeg,png|max:2048"
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant = Restaurant::select('id')->where('user_id', Auth::id())->first();
        $restaurants_id = $restaurant->id;
        $dishes = Dish::where('restaurant_id', $restaurants_id)->get();
        return view("admin.dishes.index", compact("dishes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.dishes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request->validate($this->validationRule);

        // add data
        $data = $request->all();

        // get restaurant id
        $restaurant = Restaurant::select('id')->where('user_id', Auth::id())->first();
        $restaurants_id = $restaurant->id;

        $newDish = new Dish();
        $newDish->fill($data);
        $newDish->visible = isset($data["visible"]);
        $newDish->restaurant_id = $restaurants_id;
        $newDish->save();

        // redirect
        return redirect()->route("dishes.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        return view("admin.dishes.show", compact("dish"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        return view("admin.dishes.edit", compact("dish"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        // validation
        $request->validate($this->validationRule);

        // add data
        $data = $request->all();

        $dish->fill($data);
        $dish->visible = isset($data["visible"]);
        $dish->save();

        // redirect
        return redirect()->route("dishes.show", $dish->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();
        return redirect()->route("dishes.index");
    }
}
