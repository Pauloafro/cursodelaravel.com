<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{
    // Forma de passar parametros na tela
    public function index(){
        $search = request('search');

        if ($search) {
            $events = Event::Where('title','like','%'.$search.'%')->get();
        }
        else {
            $events = Event::all();
        }
        return view('index',['events'=>$events,'search'=>$search]);
    }

    //Forma de acessar uma pagina
    public function createevents(){

        return view('/events/createevents');
    }
    public function store(Request $request){
        $event=new Event;

        /*****Variaveis que recebem dados form********/
        $event->title=$request->title;
        $event->city=$request->city;
        $event->private=$request->private;
        $event->description=$request->description;
        $event->items=$request->items;
        $event->date=$request->date;


        //Image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            
            $requestImage=$request->image;
            
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;

            $requestImage->move(public_path('img/events'), $imageName);
            
            $event->image=$imageName;
        }

       $event->save();
        return redirect('/')->with('msg','Evento criado com sucesso!');
    }
/*****Para resgatar dados do banco com o metodo findOrFail() *******/
    public function show($id){
        $event=Event::findOrFail($id);

        return view('events.show',['event'=>$event]);
    }
}
