
//taking value to increment decrement input value
var newValue = 0;

var price = document.getElementById("price").innerText;

function priceTotal(value){
    var total = value * price;
    // console.log(total)
    document.getElementById("price").innerText = total
}

var incrementButton = document.getElementsByClassName('plus-btn');
var decrementButton = document.getElementsByClassName('minus-btn');
    
//plus button
for(var i = 0; i < incrementButton.length; i++){
    var button = incrementButton[i];
    button.addEventListener("click",function(event){
        var buttonClicked = event.target;
        var input = buttonClicked.parentElement.children[1];
        var inputValue = input.value;
        var newValue = parseInt(inputValue) + 1;
        input.value = newValue;
        // console.log(newValue)

    // calling price function
    priceTotal(newValue);
})}


//minus button
for(var i = 0; i < decrementButton.length; i++){
    var button = decrementButton[i];
    button.addEventListener("click",function(event){
        var buttonClicked = event.target;
        var input = buttonClicked.parentElement.children[1];
        var inputValue = input.value;
        var newValue = parseInt(inputValue) - 1;
        if(newValue >= 0){
            input.value = newValue;
        }else{
            input.value = 0;
        }
 
    //calling price function
    priceTotal(newValue);
})}


