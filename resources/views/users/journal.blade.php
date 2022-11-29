@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    <style>
                        h1 {
                            text-align: center;
                        }
                    </style>
                    <h1>Journal</h1>
                    <style>
                        * {
                            box-sizing: border-box;
                        }

                        ul {
                            list-style-type: none;
                        }

                        body {
                            font-family: Verdana, sans-serif;
                        }

                        .month {
                            padding: 70px 25px;
                            width: 100%;
                            background: #457ec0;
                            text-align: center;
                            border-radius: 12px;
                            margin: 5px;
                        }

                        .month ul {
                            margin: 0;
                            padding: 0;
                        }

                        .month ul li {
                            color: white;
                            font-size: 20px;
                            text-transform: uppercase;
                            letter-spacing: 3px;
                        }

                        .month .prev {
                            float: left;
                            padding-top: 10px;
                        }

                        .month .next {
                            float: right;
                            padding-top: 10px;
                        }

                        .weekdays {
                            margin: 5px;
                            padding: 10px 0;
                            background-color: #ddd;
                            border-radius: 12px;
                        }

                        .weekdays li {
                            display: inline-block;
                            width: 13.6%;
                            color: #666;
                            text-align: center;
                        }

                        .weekdays li .active {
                            padding: 8px;
                            background: #457ec0;
                            border-radius: 8px;
                            margin: 5px;
                            color: white !important
                        }

                        .days {
                            padding: 10px 0;
                            background: #eee;
                            margin: 5px;
                            border-radius: 12px;
                        }

                        .days li {
                            list-style-type: none;
                            display: inline-block;
                            width: 13.6%;
                            text-align: center;
                            margin-bottom: 5px;
                            font-size: 12px;
                            color: #777;
                            margin: 5px;
                        }

                        .days li .active {
                            padding: 8px;
                            background: #457ec0;
                            border-radius: 8px;
                            margin: 5px;
                            color: white !important
                        }

                        /* Add media queries for smaller screens */
                        @media screen and (max-width: 720px) {
                            .weekdays li, .days li {
                                width: 13.1%;
                            }
                        }

                        @media screen and (max-width: 420px) {
                            .weekdays li, .days li {
                                width: 12.5%;
                            }

                            .days li .active {
                                padding: 2px;
                            }
                        }

                        @media screen and (max-width: 290px) {
                            .weekdays li, .days li {
                                width: 12.2%;
                            }
                        }
                    </style>
                    </head>
                    <body>
                    <div class="month">
                        <ul>
                            <li class="prev">&#10094;</li>
                            <li class="next">&#10095;</li>
                            <li>
                                @switch($mytime->format('m'))
                                    @case(1)
                                        <div>January</div>
                                        @break
                                    @case(2)
                                        <div>February</div>
                                        @break
                                    @case(3)
                                        <div>March</div>
                                        @break
                                    @case(4)
                                        <div>April</div>
                                        @break
                                    @case(5)
                                        <div>May</div>
                                        @break
                                    @case(6)
                                        <div>June</div>
                                        @break
                                    @case(7)
                                        <div>July</div>
                                        @break
                                    @case(8)
                                        <div>August</div>
                                        @break
                                    @case(9)
                                        <div>September</div>
                                        @break
                                    @case(10)
                                        <div>October</div>
                                        @break
                                    @case(11)
                                        <div>November</div>
                                        @break
                                    @case(12)
                                        <div>December</div>
                                        @break
                                @endswitch
                                <br>
                                <span style="font-size:18px">{{$mytime->format('Y')}}</span>
                            </li>
                        </ul>
                    </div>

                    <ul class="weekdays">
                        <li>@if ($mytime->dayOfWeek=='1')<span class="active">Mo</span>@else
                                Mo
                        </li>@endif
                        <li>@if ($mytime->dayOfWeek=='2')<span class="active">Tu</span>@else
                                Tu
                        </li>@endif
                        <li>@if ($mytime->dayOfWeek=='3')<span class="active">We</span>@else
                                We
                        </li>@endif
                        <li>@if ($mytime->dayOfWeek=='4')<span class="active">Th</span>@else
                                Th
                        </li>@endif
                        <li>@if ($mytime->dayOfWeek=='5')<span class="active">Fr</span>@else
                                Fr
                        </li>@endif
                        <li>@if ($mytime->dayOfWeek=='6')<span class="active">Sa</span>@else
                                Sa
                        </li>@endif
                        <li>@if ($mytime->dayOfWeek=='7')<span class="active">Su</span>@else
                                Su
                        </li>@endif
                    </ul>

                    <ul class="days">
                        <li>@if ($mytime->format('d')=='1')<span class="active">1</span>@else
                                1
                        </li>@endif
                        <li>@if ($mytime->format('d')=='2')<span class="active">2</span>@else
                                2
                        </li>@endif
                        <li>@if ($mytime->format('d')=='3')<span class="active">3</span>@else
                                3
                        </li>@endif
                        <li>@if ($mytime->format('d')=='4')<span class="active">4</span>@else
                                4
                        </li>@endif
                        <li>@if ($mytime->format('d')=='5')<span class="active">5</span>@else
                                5
                        </li>@endif
                        <li>@if ($mytime->format('d')=='6')<span class="active">6</span>@else
                                6
                        </li>@endif
                        <li>@if ($mytime->format('d')=='7')<span class="active">7</span>@else
                                7
                        </li>@endif
                        <li>@if ($mytime->format('d')=='8')<span class="active">8</span>@else
                                8
                        </li>@endif
                        <li>@if ($mytime->format('d')=='9')<span class="active">9</span>@else
                                9
                        </li>@endif
                        <li>@if ($mytime->format('d')=='10')<span class="active">10</span>@else
                                10
                        </li>@endif
                        <li>@if ($mytime->format('d')=='11')<span class="active">11</span>@else
                                11
                        </li>@endif
                        <li>@if ($mytime->format('d')=='12')<span class="active">12</span>@else
                                12
                        </li>@endif
                        <li>@if ($mytime->format('d')=='13')<span class="active">13</span>@else
                                13
                        </li>@endif
                        <li>@if ($mytime->format('d')=='14')<span class="active">14</span>@else
                                14
                        </li>@endif
                        <li>@if ($mytime->format('d')=='15')<span class="active">15</span>@else
                                15
                        </li>@endif
                        <li>@if ($mytime->format('d')=='16')<span class="active">16</span>@else
                                16
                        </li>@endif
                        <li>@if ($mytime->format('d')=='17')<span class="active">17</span>@else
                                17
                        </li>@endif
                        <li>@if ($mytime->format('d')=='18')<span class="active">18</span>@else
                                18
                        </li>@endif
                        <li>@if ($mytime->format('d')=='19')<span class="active">19</span>@else
                                19
                        </li>@endif
                        <li>@if ($mytime->format('d')=='20')<span class="active">20</span>@else
                                20
                        </li>@endif
                        <li>@if ($mytime->format('d')=='21')<span class="active">21</span>@else
                                21
                        </li>@endif
                        <li>@if ($mytime->format('d')=='22')<span class="active">22</span>@else
                                22
                        </li>@endif
                        <li>@if ($mytime->format('d')=='23')<span class="active">23</span>@else
                                23
                        </li>@endif
                        <li>@if ($mytime->format('d')=='24')<span class="active">24</span>@else
                                24
                        </li>@endif
                        <li>@if ($mytime->format('d')=='25')<span class="active">25</span>@else
                                25
                        </li>@endif
                        <li>@if ($mytime->format('d')=='26')<span class="active">26</span>@else
                                26
                        </li>@endif
                        <li>@if ($mytime->format('d')=='27')<span class="active">27</span>@else
                                27
                        </li>@endif
                        <li>@if ($mytime->format('d')=='28')<span class="active">28</span>@else
                                28
                        </li>@endif
                        @if($mytime->format('m')=='2'&&($mytime->format('Y')%4)||$mytime->format('m')!='2')
                            <li>@if ($mytime->format('d')=='29')<span class="active">29</span>@else
                                    29
                            </li>
                        @endif
                        <li>@if ($mytime->format('d')=='30')<span class="active">30</span>@else
                                30
                        </li>@endif
                        <li>@if ($mytime->format('d')=='31')<span class="active">31</span>@else
                                31
                        </li>@endif
                        @endif
                    </ul>
                    <form>
                        <div class="card">
                            <div class="card-header">{{ __('How do you feel today?') }}</div>
                            <br>
                            <textarea id="w3review" name="w3review" rows="4" cols="50" class="form-control">What happened today?</textarea>
                            <label for="emotions" class="card-header">How did you feel when you experienced
                                that?</label>
                            <select id="emotions" class="form-control">
                                <option value="Happy">Happy</option>
                                <option value="Anxious">Anxious</option>
                                <option value="Violated">Violated</option>
                                <option value="Disgusted">Disgusted</option>
                                <option value="Sad">Sad</option>
                                <option value="Angry">Angry</option>
                                <option value="Afraid">Afraid</option>
                            </select>
                            <br>
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
@endsection
