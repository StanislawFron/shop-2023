/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/home.js":
/*!******************************!*\
  !*** ./resources/js/home.js ***!
  \******************************/
/***/ (() => {

eval("document.addEventListener('DOMContentLoaded', function () {\n  var main = new Splide('#main-carousel', {\n    type: 'loop',\n    rewind: true,\n    pagination: false,\n    arrows: false,\n    autoplay: true,\n    speed: 1500\n  });\n  var thumbnails = new Splide('#thumbnail-carousel', {\n    fixedWidth: 270,\n    fixedHeight: 150,\n    gap: 10,\n    rewind: true,\n    pagination: false,\n    isNavigation: true,\n    arrows: false,\n    breakpoints: {\n      600: {\n        fixedWidth: 60,\n        fixedHeight: 44\n      }\n    }\n  });\n  main.sync(thumbnails);\n  main.mount();\n  thumbnails.mount();\n  document.querySelector('#slider__div').style.height = window.innerHeight - 280 + 'px';\n  window.addEventListener('resize', function () {\n    document.querySelector('#slider__div').style.height = window.innerHeight - 280 + 'px';\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJtYWluIiwiU3BsaWRlIiwidHlwZSIsInJld2luZCIsInBhZ2luYXRpb24iLCJhcnJvd3MiLCJhdXRvcGxheSIsInNwZWVkIiwidGh1bWJuYWlscyIsImZpeGVkV2lkdGgiLCJmaXhlZEhlaWdodCIsImdhcCIsImlzTmF2aWdhdGlvbiIsImJyZWFrcG9pbnRzIiwic3luYyIsIm1vdW50IiwicXVlcnlTZWxlY3RvciIsInN0eWxlIiwiaGVpZ2h0Iiwid2luZG93IiwiaW5uZXJIZWlnaHQiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2hvbWUuanM/MjQyYiJdLCJzb3VyY2VzQ29udGVudCI6WyJkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCAnRE9NQ29udGVudExvYWRlZCcsIGZ1bmN0aW9uICgpIHtcblxuICAgIHZhciBtYWluID0gbmV3IFNwbGlkZSggJyNtYWluLWNhcm91c2VsJywge1xuICAgICAgICB0eXBlICAgOiAnbG9vcCcsXG4gICAgICAgIHJld2luZDogdHJ1ZSxcbiAgICAgIHBhZ2luYXRpb246IGZhbHNlLFxuICAgICAgYXJyb3dzICAgIDogZmFsc2UsXG4gICAgICBhdXRvcGxheTogdHJ1ZSxcbiAgICAgIHNwZWVkOiAxNTAwLFxuICAgIH0gKTtcbiAgXG4gICAgdmFyIHRodW1ibmFpbHMgPSBuZXcgU3BsaWRlKCAnI3RodW1ibmFpbC1jYXJvdXNlbCcsIHtcbiAgICAgIGZpeGVkV2lkdGggIDogMjcwLFxuICAgICAgZml4ZWRIZWlnaHQgOiAxNTAsXG4gICAgICBnYXAgICAgICAgICA6IDEwLFxuICAgICAgcmV3aW5kICAgICAgOiB0cnVlLFxuICAgICAgcGFnaW5hdGlvbiAgOiBmYWxzZSxcbiAgICAgIGlzTmF2aWdhdGlvbjogdHJ1ZSxcbiAgICAgIGFycm93cyAgICA6IGZhbHNlLFxuICAgICAgYnJlYWtwb2ludHMgOiB7XG4gICAgICAgIDYwMDoge1xuICAgICAgICAgIGZpeGVkV2lkdGggOiA2MCxcbiAgICAgICAgICBmaXhlZEhlaWdodDogNDQsXG4gICAgICAgIH0sXG4gICAgICB9LFxuICAgIH0gKTtcbiAgXG4gICAgbWFpbi5zeW5jKCB0aHVtYm5haWxzICk7XG4gICAgbWFpbi5tb3VudCgpO1xuICAgIHRodW1ibmFpbHMubW91bnQoKTtcblxuICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNzbGlkZXJfX2RpdicpLnN0eWxlLmhlaWdodCA9IHdpbmRvdy5pbm5lckhlaWdodCAtIDI4MCArICdweCc7XG4gICAgd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoICdyZXNpemUnLCBmdW5jdGlvbiAoKSB7XG4gICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjc2xpZGVyX19kaXYnKS5zdHlsZS5oZWlnaHQgPSB3aW5kb3cuaW5uZXJIZWlnaHQgLSAyODAgKyAncHgnO1xuICAgIH0pO1xuICB9ICk7XG4gIFxuIl0sIm1hcHBpbmdzIjoiQUFBQUEsUUFBUSxDQUFDQyxnQkFBZ0IsQ0FBRSxrQkFBa0IsRUFBRSxZQUFZO0VBRXZELElBQUlDLElBQUksR0FBRyxJQUFJQyxNQUFNLENBQUUsZ0JBQWdCLEVBQUU7SUFDckNDLElBQUksRUFBSyxNQUFNO0lBQ2ZDLE1BQU0sRUFBRSxJQUFJO0lBQ2RDLFVBQVUsRUFBRSxLQUFLO0lBQ2pCQyxNQUFNLEVBQU0sS0FBSztJQUNqQkMsUUFBUSxFQUFFLElBQUk7SUFDZEMsS0FBSyxFQUFFO0VBQ1QsQ0FBQyxDQUFFO0VBRUgsSUFBSUMsVUFBVSxHQUFHLElBQUlQLE1BQU0sQ0FBRSxxQkFBcUIsRUFBRTtJQUNsRFEsVUFBVSxFQUFJLEdBQUc7SUFDakJDLFdBQVcsRUFBRyxHQUFHO0lBQ2pCQyxHQUFHLEVBQVcsRUFBRTtJQUNoQlIsTUFBTSxFQUFRLElBQUk7SUFDbEJDLFVBQVUsRUFBSSxLQUFLO0lBQ25CUSxZQUFZLEVBQUUsSUFBSTtJQUNsQlAsTUFBTSxFQUFNLEtBQUs7SUFDakJRLFdBQVcsRUFBRztNQUNaLEdBQUcsRUFBRTtRQUNISixVQUFVLEVBQUcsRUFBRTtRQUNmQyxXQUFXLEVBQUU7TUFDZjtJQUNGO0VBQ0YsQ0FBQyxDQUFFO0VBRUhWLElBQUksQ0FBQ2MsSUFBSSxDQUFFTixVQUFVLENBQUU7RUFDdkJSLElBQUksQ0FBQ2UsS0FBSyxFQUFFO0VBQ1pQLFVBQVUsQ0FBQ08sS0FBSyxFQUFFO0VBRWxCakIsUUFBUSxDQUFDa0IsYUFBYSxDQUFDLGNBQWMsQ0FBQyxDQUFDQyxLQUFLLENBQUNDLE1BQU0sR0FBR0MsTUFBTSxDQUFDQyxXQUFXLEdBQUcsR0FBRyxHQUFHLElBQUk7RUFDckZELE1BQU0sQ0FBQ3BCLGdCQUFnQixDQUFFLFFBQVEsRUFBRSxZQUFZO0lBQzdDRCxRQUFRLENBQUNrQixhQUFhLENBQUMsY0FBYyxDQUFDLENBQUNDLEtBQUssQ0FBQ0MsTUFBTSxHQUFHQyxNQUFNLENBQUNDLFdBQVcsR0FBRyxHQUFHLEdBQUcsSUFBSTtFQUN2RixDQUFDLENBQUM7QUFDSixDQUFDLENBQUUiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvaG9tZS5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/home.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/home.js"]();
/******/ 	
/******/ })()
;