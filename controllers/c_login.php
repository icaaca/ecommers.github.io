<?php
if($aksi=='index'){
    $data['title'] = "Halaman login";
    $helpers->load_view('login/login.php',$data);
    
if($aksi=='send'){
    echo"sedang diproses";

}