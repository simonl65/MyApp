<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index()
  {
    $data = array(
      'title' => 'Home',
      'page_heading' => 'Welcome to MyApp!'
    );

    return view( 'pages/index' )->with($data);
  }

  public function about()
  {
    $data = array(
      'title' => 'About',
      'page_heading' => 'About Us'
    );

    return view('pages/about')->with($data);
  }

  public function services()
  {
    $data = array(
      'title' => 'Services',
      'page_heading' => 'Our Services',
      'services' => ['Web Development', 'SEO', 'Dashboards']
    );

    return view('pages/services')->with($data);
  }
}
