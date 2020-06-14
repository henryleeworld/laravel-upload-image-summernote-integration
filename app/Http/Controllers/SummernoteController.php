<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use DomDocument;

class SummernoteController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('summernote');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
        ]);
        $description=$request->input('description');
        $dom = new DomDocument();
        $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
        $images = $dom->getElementsByTagName('img');
        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name= "/upload/" . time(). $k . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }
        $description = $dom->saveHTML();
        dd($description);
    }
}
