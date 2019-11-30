<?php
 // Built in String Functions ---- Just a few examples :)

    #strrev(string) reverses the string 
    echo strrev(".dlrow olleH"); #-------> will return "Hello World."
    
    #str_repeat(string, # of times repeated) repeates the strings a given number of times 
    echo str_repeat("Hip", 2); # --------> will return "Hip Hip"

    #strtoupper(string) convertes all latters in a string to upper case
    echo strtoupper("hooray!"); # -----> Will return "HOORAY!"

    #strlen(string) reutns the length of the string
    echo strlen("happy"); # ------> Will reutrn 5

 //Defining custom functions

    function greet() {
        echo "Hello!\n";
    }

    echo greet(); # ------> Will return "Hello!"

// reurning vales 

    # use the return kkey word

    function greeting(){
        return "Hello";
    }

    echo greeting(). " Rohan\n"; # ------> will return "Hello Rohan"
// Arguments 

    #arguments have $ as they are variables 

    function hello($lang){
        if ($lang == 'es'){
            return "Hola";
        }else if ($lang == 'fr'){
            return "Bonjour";
        }else{
            return "Sorry, that langugae is note supported, but hello anyway";
        }
    }
    

    print hello('es') . " Glenn\n"; # ---> will return "Hola Glenn"
    print hello('fr') . " Sally\n"; # ---> will return "Bonjour Sally"
    print hello('gr') . " Steve\n"; # ---> will return "Sorry, that langugae is note supported, but hello anyway Steve"


    # you can also add optional arguments/ defaults to functions  
    function hello2($lang = 'es'){ # setting 'es" to the default 
        if ($lang == 'es'){
            return "Hola";
        }else if ($lang == 'fr'){
            return "Bonjour";
        }else{
            return "Sorry, that langugae is note supported, but hello anyway";
        }
    }
    
    print hello2() . " Tom\n"; # ---> will return "Hola Tom"
    print hello2('es') . " Glenn\n"; # ---> will return "Hola Glenn"
    print hello2('fr') . " Sally\n"; # ---> will return "Bonjour Sally"
    print hello2('gr') . " Steve\n"; # ---> will return "Sorry, that langugae is note supported, but hello anyway Steve"

    # Calling by reference 
        #in php you can call by reference. Meaning you can change the variable passed into an argument
        #this is done by the addition of the "&" symbol at the beginning of the argument
        #came from C
        #usefulespecially with array functions, you dont need to make a copy you can just work with the original array

        function triple(&$realthing){
            $realthing = $realthing * 3;
        }

        $val = 10;
        triple($val); #--> makeing the value of val equal to its current value times three 
        echo "Triple = $val\n" #----> will return 30
?>