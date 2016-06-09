@extends('layout')

@section('content')
    <h3>{{Session::get('message')}}</h3>
    <p>
    "Random-access memory (RAM /ræm/) is a form of computer data storage. A random-access
    memory device allows data items to be accessed (read or written) in almost the same
    amount of time irrespective of the physical location of data inside the memory. In
    contrast, with other direct-access data storage media such as hard disks, CD-RWs,
    DVD-RWs and the older drum memory, the time required to read and write data items
    varies significantly depending on their physical locations on the recording medium,
    due to mechanical limitations such as media rotation speeds and arm movement." -Wikipedia
    </p>

    <p>
        Ram manufacturers like Kingston,Corsair and Ripjaw are afraid
        of consumers finding this site, Because we provide
        high resolution computer ram for free. Our ram is proven reliable
        by our massive userbase. Our ram saves dozens of lives around the world.
    </p>

    <div>
    <h3>User Testimonies</h3>
    <ul>
      <li>"How is ram this good free?" - Bill Clinton</li>
      <li>"Our armored and naval divisions would fall apart without FreeRam.com" - Military</li>
      <li>"FreeRam.com Increased our profit margin in our ram department by 100%" - Kingston Guy</li>
      <li>"This is the best Ram I've ever seen" - Stevie Wonder</li>
    </ul>
    </div>
    <!-- CENTER WITH BOOTSTRAP !!!!!!-->
    <div>
      <h3 class='centerThis'>{{$stats['total_ram']}} Bytes of ram given away so far.</h3>
      <h3 class='centerThis'>Latest Life Saved: {{$stats['latelifesaved']}}</h3>
      <h3 class='centerThis'>Total Complaints: {{$stats['complaints']}}</h3>
    </div>


@stop
