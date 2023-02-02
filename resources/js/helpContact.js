document.querySelectorAll('.showAnswer').forEach(function (e){
        e.addEventListener('click', function(){
            let answer = this.parentNode.parentNode.querySelector('.answer');
            if(answer.classList.contains('d-none')){
                answer.classList.remove('d-none');
                this.innerHTML ="-";
            }else{
                answer.classList.add('d-none');
                this.innerHTML ="+";
            }
        })
});