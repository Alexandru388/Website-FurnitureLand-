<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\Furniture;
use App\models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class FurnitureController extends Controller
{
    //
    public function index() {
        $furnitures = Furniture::all(); 

        return view('catalog', ['furnitures' => $furnitures]);

    }

    public function store(Request $req){
        $newFurnitures = new Furniture();
        
        $nume = $req -> nume;
        $brand = $req -> brand;
        $categorie = $req -> categorie;
        $culoare = $req -> culoare;
        $latime = $req -> latime;
        $lungime = $req -> lungime;
        $pret = $req -> pret;
        


        if($req -> hasFile('image')) {
     $image = $req -> file('image');
     $img_ext = $image ->getClientOriginalExtension();
     $img_name = uniqid() . '.' . "png";
     $img_folder= public_path('images/');
     $image -> move($img_folder, $img_name);


         $newFurnitures -> nume =$nume;
         $newFurnitures -> brand =$brand;
         $newFurnitures -> categorie =$categorie; 
         $newFurnitures -> culoare =$culoare; 
         $newFurnitures -> latime =$latime; 
         $newFurnitures -> lungime =$lungime; 
         $newFurnitures -> pret =$pret; 
         $newFurnitures -> image =$img_name; 


        }else {
            return redirect ('/create');
        }

        $newFurnitures -> save();

        return redirect('/catalog');
    }

    public function edit(){
        $furnitures = Furniture::all();

        return view("update",  ['furnitures' => $furnitures]);
    }     // $furnitures = Furniture::all();
        // $furniture = $furnitures -> where('id', '=', $req -> selected_furniture);

    public function update(Request $req) {
        $furniture = Furniture::findOrFail($req -> selected_furniture);
   
        $sent = true;
        
        return view("update", ['furniture' => $furniture, 'sent' => $sent]);
        }

        public function save(Request $req){
               
             $furniture = Furniture::findOrFail($req -> id);
             $furniture -> nume = $req -> nume;
             $furniture -> brand = $req -> brand;
             $furniture -> categorie = $req -> categorie;
             $furniture -> latime = $req -> latime;
             $furniture -> lungime = $req -> lungime;
             $furniture -> pret = $req -> pret;
             



              if($req -> hasFile('image')) {
                if($furniture -> image) {
                    unlink(public_path('images/' . $furniture -> image));
                }
              
            
                
                   $image = $req -> file('image');
                    $img_ext = $image ->getClientOriginalExtension();
                    $img_name = uniqid() . '.' . "png";
                    $img_folder= public_path('images/');
                    $image -> move($img_folder, $img_name);
                    $furniture -> image = $img_name;

              }
              $furniture -> save();
              return redirect('/catalog');

        }


public function destroy(){

    $furnitures = Furniture::all();

    return view("delete", ['furnitures' => $furnitures]);
}

public function destroy1(){
 $user = Auth::user();
 $user -> cart = [];
 $user -> save();

return redirect('/cart');
}


//

//public function destroyWC($id){
// $furniture = Furniture::findOrFail($id);

 //if($furniture -> image){
 //   unlink(public_path("images/" . $furniture -> image));
//}
 //$furniture -> delete();
 //return redirect('/catalog');

//}


public function delete(Request $req){
    $furniture = Furniture::findOrFail($req -> id);
   
    if($furniture -> image){
       unlink(public_path("images/" . $furniture -> image));
    }
    $furniture -> delete();
    return redirect('/catalog');
   
   }

   

public function sort(Request $req) {
      $furnitures = Furniture::all() -> where("categorie", "=", $req -> categorie);
      $categorie = $req -> categorie;
       

      return view('sort') -> with(compact('furnitures')) -> with(compact('categorie'));
    

}
public function sort2(Request $req) {
    $furnitures = Furniture::all() -> where("pret", "<", $req -> pret);
    $pret = $req -> pret;
     

    return view('sort2') -> with(compact('furnitures')) -> with(compact('pret'));
  

}


public function cart(Request $req){
   $user = Auth::user();
   $id = $req -> furniture_id;

    if ($user -> cart){
         $cartItems = explode("/", $user -> cart);
         if(!in_array($id, $cartItems)){
            array_push($cartItems, $id);

            $cartStr = implode("/", $cartItems);
            $user -> cart = $cartStr;
         }
    }else{
        $cartItems = [];
        array_push($cartItems, $req -> furniture_id);
        
        $cartStr = implode("/", $cartItems );
        $user -> cart = $cartStr;
        
      }
      $user -> save();
      return redirect('/cart');
    }


    


public function showCart() {
        $userCart = explode("/", Auth::user() -> cart);
        $furnitures = Furniture::all();

        if(count($userCart) > 0) {
            $cartItems = [];

            for($i = 0; $i < count($furnitures); $i++){
                for($j = 0; $j < count($userCart); $j++){
                    if($furnitures[$i] -> id == $userCart[$j]){
                      array_push($cartItems, $furnitures[$i]);
                    }
                    
                }
            }
            return view('cart') -> with(compact('cartItems'));
        }

       
 }





 public function home(Request $req) {
    $furnitures = Furniture::all() -> where("nume", "=", $req -> nume);
    $nume = $req -> nume;
     

    return view('home') -> with(compact('furnitures')) -> with(compact('nume'));
  

}




}


