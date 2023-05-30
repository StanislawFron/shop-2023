let categoryInput = document.getElementById('category');
categoryInput.addEventListener('change', function(a){
    if(a.target.value!="category"){
        document.getElementById('group').classList.remove("d-none");
    }else{
        document.getElementById('group').classList.add("d-none");
    }
})