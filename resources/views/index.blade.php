@extends('layouts.master')
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: coral">
        <div class="container-fluid" >
            <a class="container">
                <a style="font-size:100px;color: #6b7280">XXX</a>
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="font-size:30px;color: #6b7280">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="font-size:30px;color: #6b7280">Much longer nav link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="font-size:30px;color: #6b7280">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" style="font-size:30px;color: #6b7280">Disabled</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>
<main>
    @foreach ($ticket as $ticket1)
        <div class="m1_div">
            <div>
                <h3> 票券名稱: <a>{{$ticket1->name}}</a></h3><br>
                <h4> 單價:<a>{{$ticket1->cost}}</a></h4><br>
                <h4>數量:<a>{{$ticket1->quantity}}</a></h4><br>
               詳細資料:  <p class="card-text">{{$ticket1->content}}</p><hr>

                <div class="t_div" >
                    <img class="t_img" src="../img/ticket/{{$ticket1->img}}">
                </div>
            </div>

        </div>
        <hr>
        <!-- /.row -->
    @endforeach


</main>
