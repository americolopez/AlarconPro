function isInputNumber(){
    var ch = String.fromCharCode(evt.which)

    if(!(/[0-9]/.test(ch))){
        evt.preventDefault();
    }
}

     function lettersOnly(input){
        var regax= /[^a-z]/gi;
        input.value= input.value.replace(regax, "");
     }

     function checkforblank(){
        if(document.getElementById('fname').value == ""){
            alert('please do not leave any fields empty');
            return false;
        }
     }
     
    