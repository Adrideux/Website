document.addEventListener('DOMContentLoaded',init,false);

function init() {
    const checkbox = document.getElementById("checkbox");
    checkbox.addEventListener("click",function(){
        checkbox.classList.toggle("checkboxchecked");
        console.log(checkbox.classList.contains("checkboxchecked"))
        if(checkbox.classList.contains("checkboxchecked") == false){
            let done = document.getElementsByClassName("done");
            for(let i=0;i<done.length;i++){
                done[i].style.display = "none";
            }
        }else{
            let done = document.getElementsByClassName("done");
            for(let i=0;i<done.length;i++){
                done[i].style.display = "block"
            }
        }
    });
}
