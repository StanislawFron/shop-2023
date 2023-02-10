require('./bootstrap');

let actuallyScroll = 0;

document.addEventListener( 'DOMContentLoaded', function () {
    hideNavbarOnScrollDown();
    showMenuOnMobile();
});

function slideUp(el) {
    var elem = document.getElementById(el);
    elem.style.height = "70px";
  }
  
function slideDown(el) {
    var elem = document.getElementById(el);
    elem.style.height = "0px";
  }

function hideNavbarOnScrollDown() {
    document.addEventListener('scroll', () => {
        if(actuallyScroll>window.scrollY){
            slideUp('mobile-menu');
        }else{
            slideDown('mobile-menu');
        }
        actuallyScroll = window.scrollY;
    });
  }


function showMenuOnMobile(){
    let offsetTop;
    if(location.href!='http://localhost:8000/login'){
      document.getElementById('mobileItemMenu').addEventListener('click', () => {
        let categoryTable = document.getElementById('categoryTable');
        if(categoryTable.classList.contains('d-none')){
            offsetTop = window.pageYOffset;
            categoryTable.classList.remove('d-none');
            categoryTable.classList.remove('w-75');
            categoryTable.classList.remove('border');
            categoryTable.classList.add('mobileCategory');
            categoryTable.classList.add('w-100');
            categoryTable.classList.add('h-100');
            document.querySelectorAll('.menuCategory').forEach(function (a){
                a.classList.add('p-3');
            })
            document.querySelectorAll('.mobileContentCategoryHide').forEach(function (a){
                a.classList.add('d-none');
            })
            window.scrollTo({ top:0, left:0, behavior: "instant"})
            categoryTable.animate([
                { transform: 'translateX(-400px)' },
                { transform: 'translateX(0px)' }
              ], {
                duration: 200
              });
        }else{
            document.querySelectorAll('.mobileContentCategoryHide').forEach(function (a){
                a.classList.remove('d-none');
            })
            window.scrollTo({ top:offsetTop, left:0, behavior: "instant"})
            let mobileHide = categoryTable.animate([
                { transform: 'translateX(0px)' },
                { transform: 'translateX(-400px)' }
              ], {
                duration: 200
              });
              mobileHide.onfinish = () => {
                categoryTable.classList.remove('mobileCategory');
                categoryTable.classList.add('d-none');
              }
        }
    });
    }
}