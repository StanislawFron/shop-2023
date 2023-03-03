require('./bootstrap');

let actuallyScroll = 0;
let canScroll = true;

document.addEventListener( 'DOMContentLoaded', function () {
    hideNavbarOnScrollDown();
    showMenuOnMobile();
});

function slideUp(el, canScroll) {
    if(canScroll){
      var elem = document.getElementById(el);
      elem.style.height = "70px";
    }
  }
  
function slideDown(el, canScroll) {
    if(canScroll){
      var elem = document.getElementById(el);
      elem.style.height = "0px";
    }
  }

function hideNavbarOnScrollDown() {
    document.addEventListener('scroll', () => {
        if(actuallyScroll>window.scrollY){
            slideUp('mobile-menu', canScroll);
        }else{
            slideDown('mobile-menu', canScroll);
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
            canScroll= false;
            categoryTable.classList.add('fixed');
            offsetTop = window.pageYOffset;
            categoryTable.classList.remove('d-none');
            categoryTable.classList.remove('w-75');
            categoryTable.classList.remove('border');
            categoryTable.classList.add('mobileCategory');
            categoryTable.classList.add('w-100');
            categoryTable.style.height = window.innerHeight-70+"px";
            categoryTable.animate([
                { transform: 'translateX(-400px)' },
                { transform: 'translateX(0px)' }
              ], {
                duration: 300
              });
        }else{
          let mobileHide = categoryTable.animate([
            { transform: 'translateX(0px)' },
            { transform: 'translateX(-400px)' }
          ], {
            duration: 300
          });
          mobileHide.onfinish = () => {
            categoryTable.classList.remove('mobileCategory');
            categoryTable.classList.add('d-none');
            document.querySelectorAll('.mobileContentCategoryHide').forEach(function (a){
              a.classList.remove('d-none');
              canScroll= true;
              categoryTable.classList.remove('fixed');
          })
          }
        }
    });
    }
}