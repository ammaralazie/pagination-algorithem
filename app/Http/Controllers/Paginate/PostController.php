<?php

namespace App\Http\Controllers\Paginate;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $paginator = [];
    public function index(Request $request,$number_of_paginator='1',$post_number =4)
    {
        $obj = Post::get();

        $pags_num = ceil($obj->count() / $post_number);
        $num_post_lst_pag = intval($obj->count() % $post_number);
        $all_pst_nub = $obj->count();
        $c = 0;

        for ($i = 1; $i <= $pags_num; $i++) {
            $pst_in_pag = [];
            if ($num_post_lst_pag) {

                for ($j = 0; $j < $post_number; $j++) {

                    if ($i == $pags_num) {

                        if ($j == $num_post_lst_pag) {
                            break;
                        } else {
                            $pst_in_pag[$j] = $obj[$c++];
                        }

                    } else {
                        $pst_in_pag[$j] = $obj[$c++];
                    }//end if to check this page is last or no

                } //end for of j
            } else {

                for ($j = 0; $j < $post_number; $j++) {

                    $pst_in_pag[$j] = $obj[$c++];
                    if ($c == $all_pst_nub) {
                        break;
                    }

                } //end for of j

            }//end if  to check if found remainder of the division or no

            $this->paginator += [
                $i => $pst_in_pag,
            ];
        } //end for of i

        $paginate = [];
        foreach ($this->paginator as $key => $value) {

            if ($key == $number_of_paginator) {
                $paginate = [$key => $value];
            }//end of if

        } //end of for each
        return view('paginate.index', compact('obj', 'pags_num', 'paginate', 'all_pst_nub'));
    } //end of index


    public function asciicode()
    {
        for($i=0;$i<=122;$i++){
            $x[$i]=chr($i);
        }//end of for i
        dd($x);

    } //end of create


    public function store(Request $request)
    {
        //
    } //end of store

    public function show(Post $post)
    {
        //
    } //end of show


    public function edit(Post $post)
    {
        //
    } //end of edit


    public function update(Request $request, Post $post)
    {
        //
    } //end of update


    public function destroy(Post $post)
    {
        //
    } //end of delete
}
