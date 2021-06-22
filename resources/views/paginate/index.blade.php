<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
   *{
       outline: none;border: none;
       padding:0;margin: 0;
       list-style: none;
       box-sizing: border-box;
   }
   body{
       height: 100vh;
   }
   .container-posts{
       width: 100%;
       height:100% ;
       display: flex;
       align-items: center;
       justify-content: center;
       background-color: #eee;
       flex-direction: column;

    }.wepper-posts{
        width: 70%;
        height: 70%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr ;
        align-items: center;
        justify-content: center;
        border-radius: 4px;
        background-color: #fff;
        box-shadow: 1px 1px 3px #948a8a;
        padding: 10px;

    }.card-posts{
        border-radius: 10px;
        box-shadow: 1px 1px 2px #1a1a1a,-1px -1px 2px #1a1a1a;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 10px;
        cursor: default;
        transition: all .3s ease-in-out;
    }.card-posts:hover{
        color: #c90913;
        box-shadow: 1px 1px 2px #c90913 inset,-1px -1px 2px #c90913 inset;
    }.container-posts nav{
        margin-top: 10px
    }
</style>
<body>
<!--posts-->

<div class="container-posts">
    <div class="wepper-posts">
        @foreach ($paginate as $key=>$item)
        @foreach ($item as $item)
        <div class="card-posts">
            <div class="name">
                {{$item->name}}
            </div>
        </div>
        @endforeach
        @endforeach
    </div>
    <!--paginateion-->
<nav aria-label="...">
    <ul class="pagination">
        <li class="page-item"
        @if (request()->number_of_paginator-1<1)
        style="display:none"
        @else
        style="display:inline-block"
        @endif
        >
            <a class="page-link" href="{{
                route('posts.index',['number_of_paginator'=>request()->number_of_paginator-1])
            }}
            ">previous</a>
          </li>
      @for ($i=1;$i<=$pags_num;$i++)
        <li class="page-item"><a class="page-link"  href="{{
        route('posts.index',['number_of_paginator'=>$i])
        }}"
        @if (request()->number_of_paginator==$i)
            style="background-color: rgb(56, 108, 177);color:#fff"
        @endif>{{$i}}</a></li>
      @endfor
      <li class="page-item"
        @if (request()->number_of_paginator+1>$pags_num)
        style="display:none"
        @else
        style="display:inline-block"
        @endif
      >

        <a class="page-link" href="{{
            route('posts.index',['number_of_paginator'=>request()->number_of_paginator+1])

        }}
        ">Next</a>
      </li>
    </ul>
  </nav>
<!--/pagination-->
</div>

<!--/posts-->



<!--js for bootstrap-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--/js for bootstrap-->
</body>
</html>
