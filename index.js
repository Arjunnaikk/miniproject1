let countEL= document.getElementById("count-el");
let tempEL= document.getElementById("temp-el");
let count=0
function start()
{
    count=count+1
    countEL.textContent=count
    tempEL.textContent=count
}