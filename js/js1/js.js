var a=5,b=2,d="js",c
c = a+b+d
//console.log(c)
//if + d result a+b join d ( php .) (js +)
var text = "<p>hello javascript text</p>"
var mydiv = document.querySelector(".mydiv")
var but = document.querySelector(".but")
//css in js
but.addEventListener("click",function(){
    mydiv.style.opacity = 1;//ok
     mydiv.style.color = "red"; 
    // document.write(c)
//    mydiv.innerHTML = text
//      mydiv.setAttribute("style",
//       "border:1px solid black;color:blue;font-size:45px;"
     
//     );
})

var mydiv2 = document.querySelector(".mydiv2")
var but1 = document.querySelector(".but1")
but.addEventListener("click",function(){
    mydiv2.style.color = "red"; 
})
var mydiv2 = document.querySelector(".mydiv2")
var but2 = document.querySelector(".but2")
but.addEventListener("click",function(){
    mydiv2.style.color = "blue"; 
})
var mydiv2 = document.querySelector(".mydiv2")
var but3 = document.querySelector(".but3")
but.addEventListener("click",function(){
    mydiv2.style.color = "yellow";//ok 
})


