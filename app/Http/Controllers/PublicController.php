<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;

class PublicController extends Controller
{
    
    public function index()
    {
    	return view('welcome');
    }
    public function menu()
    {
      $categories= Category::where('status',1)->get();
      $menus=Menu::where('status',1)->get();
     return view('menu_list',compact('categories','menus'));	 
    }
    public function menuList($id)
    {
      $categories= Category::where('status',1)->get();
      $menus=Menu::where('status',1)->get();
      return view('menu_list',compact('categories','menus','id'));	 
    }
    public function allMenu()
    {
      $categories= Category::where('status',1)->get();
      $menus=Menu::where('status',1)->get();
      return view('menu_list',compact('categories','menus'));	
    }

}
