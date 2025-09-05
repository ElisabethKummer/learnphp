<?php

function sayHello(){
    var_dump('Hello');
}
sayHello();

function sayHelloToMe($name='Nameless'){
    var_dump("Hello $name!!");
}
sayHelloToMe('Liisu');
sayHelloToMe('Tris');
sayHelloToMe('Kusti');
sayHelloToMe();

function sayNameandAge($name, $age){
    var_dump("Your name is $name and you are $age.");
}

sayNameandAge('Liisu', 18);
sayNameandAge('Grant', 27);



function recursion($i){
    if($i<10){
        var_dump($i);
        recursion($i+1);}
}
recursion(0);