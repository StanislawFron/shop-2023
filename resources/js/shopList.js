function listItemClicable(){
    if(window.innerWidth<500){
        document.querySelectorAll('.listItem').forEach(function (a) {
            a.addEventListener('click', findDataset, this);
        });
    }else{
        document.querySelectorAll('.listItem').forEach(function (a) {
            a.removeEventListener('click', findDataset, this)
        });
    }

    window.addEventListener('resize', function() {
        listItemClicable();
    })
    
}

function findDataset(a){
    window.location.href = a.target.parentNode.dataset.url;
}

listItemClicable();
