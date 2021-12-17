<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;
use App\Models\category;


class TicketController extends Controller
{
    public function index(){

        $tickets = Ticket::latest()->get();
        $categories = Category::latest()->get();

        return view('ticketAll')
        ->with(['tickets'=> $tickets])
        ->with(['categories'=> $categories]);


    }
}
