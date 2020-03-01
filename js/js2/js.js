var mainText = document.querySelector(".main-text");
var range = document.querySelector(".range-size");
var color = document.querySelector(".col");
range.addEventListener("input",function(){
      var sizes = range.value;
      mainText.style.height = sizes+"px"; 
      mainText.style.fontSize = sizes +"px";
    //create font-family for input text (homework)
     mainText.style.color = color.value;
});