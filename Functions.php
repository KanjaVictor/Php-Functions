<?php

//Besides the built-in Php functions, we can create our own functions
//A function is a block of statements that can be used repeatedly in a program
//A function will not execute immediately when a page loads
//A function will be executed by a call to the function
/*
function functionName(){
    block of code to execute;
}
*/
#Creating/declaring a function
function sayHelloWorld(){
    echo "Hello World ";
    breakTag();
    echo "Hello World ";
    breakTag();
    echo "Hello World ";
}
#calling a function
sayHelloWorld();
breakTag();
$x = strrev("Hello World");
echo $x;
breakTag();
#parameter is when one is declaring a function: an argument when calling a function
function greetings($name,$age){
    echo "My name is $name and am $age years old";
}
$myName = "Kanja";
$myAge = 300;
greetings($myName,$myAge);

#a function that breaks
function breakTag(){
    echo"<br>";
}
#create a function that takes a number , and it echos out the square of that number
breakTag();
function numSquare($num){
   echo $num * $num;

}

numSquare(12);

#a function to reverse a string
breakTag();
function strReverse($string){
    echo strrev($string);
}

strReverse("Have a good day");

breakTag();

function getMod($num1 ,$num2){
    $result = $num1 % $num2;
    return $result;
}

$getTheMod = getMod(3,2);

echo $getTheMod;

breakTag();

function church($pastor = "Ng'ang'a"){
    echo "My pastor is Pst.$pastor.";
}

church("Joseph");


