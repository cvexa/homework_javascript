/*1. Напишете функция, която връща индекса на първия елемент в 
масив от числа,
който е по-голям и от двете си съседни числа. 
Функцията връща –‘No such
number’ ако няма такъв елемент. */

function find_me(){



for (var i = 0; i < arguments.length; i++) {
    if (arguments[i-1] != undefined && arguments[i+1] != undefined) {
        
        var current = arguments[i];
        if (current > arguments[i-1] && current > arguments[i+1]) {
            console.log("[ " + [i] + " ] index is bigger than it's neighbors! value - " + current);
        }
         // else {
        //     console.log(current + " is smaller than it's neighbors!");
       // }
           if(current == arguments[i-1] && current == arguments[i+1]){
            console.log(" No such number");
           }
    } else {
        console.log("[ " + [i] + " ] index doesn't have enough neighbors! value - " + arguments[i]);
        }
    }
console.log("full array : ");
return console.log(arguments);
}


find_me(123,1,23,4,54235,234,4,123,122,33123,1,12355,12312,33333333,5,122);