<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller
{

    // Must have SayHi()
    function SayHi()
    {
        $this->view("layout1", [
            "Page" => "trangchu"
        ]);
    }
}
