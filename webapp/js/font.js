var fs = 1.5;
 //++= +1



function petit() {
    fs = fs-0.5;
    document.body.style.fontSize=(fs+"rem");
    //document.getElementById("text").style.fontSize="1rem";
    //alert(fs+"rem");
}
function mitja() {
    fs = 1.5;
    document.body.style.fontSize=(fs+"rem");
    //alert(fs+"rem");
}
function gran() {
    fs = fs+0.5;
    document.body.style.fontSize=(fs+"rem");
    //alert(fs+"rem");
}


document.getElementById("petit").addEventListener('click', petit);
document.getElementById("mitja").addEventListener('click', mitja);
document.getElementById("gran").addEventListener('click', gran);
