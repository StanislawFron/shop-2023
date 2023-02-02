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

/***/ "./resources/js/shopList.js":
/*!**********************************!*\
  !*** ./resources/js/shopList.js ***!
  \**********************************/
/***/ (() => {

eval("function listItemClicable() {\n  if (window.innerWidth < 500) {\n    document.querySelectorAll('.listItem').forEach(function (a) {\n      a.addEventListener('click', findDataset, this);\n    });\n  } else {\n    document.querySelectorAll('.listItem').forEach(function (a) {\n      a.removeEventListener('click', findDataset, this);\n    });\n  }\n  window.addEventListener('resize', function () {\n    listItemClicable();\n  });\n}\nfunction findDataset(a) {\n  window.location.href = a.target.parentNode.dataset.url;\n}\nlistItemClicable();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJsaXN0SXRlbUNsaWNhYmxlIiwid2luZG93IiwiaW5uZXJXaWR0aCIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvckFsbCIsImZvckVhY2giLCJhIiwiYWRkRXZlbnRMaXN0ZW5lciIsImZpbmREYXRhc2V0IiwicmVtb3ZlRXZlbnRMaXN0ZW5lciIsImxvY2F0aW9uIiwiaHJlZiIsInRhcmdldCIsInBhcmVudE5vZGUiLCJkYXRhc2V0IiwidXJsIl0sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9zaG9wTGlzdC5qcz9jMjQ1Il0sInNvdXJjZXNDb250ZW50IjpbImZ1bmN0aW9uIGxpc3RJdGVtQ2xpY2FibGUoKXtcclxuICAgIGlmKHdpbmRvdy5pbm5lcldpZHRoPDUwMCl7XHJcbiAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmxpc3RJdGVtJykuZm9yRWFjaChmdW5jdGlvbiAoYSkge1xyXG4gICAgICAgICAgICBhLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZmluZERhdGFzZXQsIHRoaXMpO1xyXG4gICAgICAgIH0pO1xyXG4gICAgfWVsc2V7XHJcbiAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmxpc3RJdGVtJykuZm9yRWFjaChmdW5jdGlvbiAoYSkge1xyXG4gICAgICAgICAgICBhLnJlbW92ZUV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZmluZERhdGFzZXQsIHRoaXMpXHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICAgd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ3Jlc2l6ZScsIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIGxpc3RJdGVtQ2xpY2FibGUoKTtcclxuICAgIH0pXHJcbiAgICBcclxufVxyXG5cclxuZnVuY3Rpb24gZmluZERhdGFzZXQoYSl7XHJcbiAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9IGEudGFyZ2V0LnBhcmVudE5vZGUuZGF0YXNldC51cmw7XHJcbn1cclxuXHJcbmxpc3RJdGVtQ2xpY2FibGUoKTtcclxuIl0sIm1hcHBpbmdzIjoiQUFBQSxTQUFTQSxnQkFBZ0IsR0FBRTtFQUN2QixJQUFHQyxNQUFNLENBQUNDLFVBQVUsR0FBQyxHQUFHLEVBQUM7SUFDckJDLFFBQVEsQ0FBQ0MsZ0JBQWdCLENBQUMsV0FBVyxDQUFDLENBQUNDLE9BQU8sQ0FBQyxVQUFVQyxDQUFDLEVBQUU7TUFDeERBLENBQUMsQ0FBQ0MsZ0JBQWdCLENBQUMsT0FBTyxFQUFFQyxXQUFXLEVBQUUsSUFBSSxDQUFDO0lBQ2xELENBQUMsQ0FBQztFQUNOLENBQUMsTUFBSTtJQUNETCxRQUFRLENBQUNDLGdCQUFnQixDQUFDLFdBQVcsQ0FBQyxDQUFDQyxPQUFPLENBQUMsVUFBVUMsQ0FBQyxFQUFFO01BQ3hEQSxDQUFDLENBQUNHLG1CQUFtQixDQUFDLE9BQU8sRUFBRUQsV0FBVyxFQUFFLElBQUksQ0FBQztJQUNyRCxDQUFDLENBQUM7RUFDTjtFQUVBUCxNQUFNLENBQUNNLGdCQUFnQixDQUFDLFFBQVEsRUFBRSxZQUFXO0lBQ3pDUCxnQkFBZ0IsRUFBRTtFQUN0QixDQUFDLENBQUM7QUFFTjtBQUVBLFNBQVNRLFdBQVcsQ0FBQ0YsQ0FBQyxFQUFDO0VBQ25CTCxNQUFNLENBQUNTLFFBQVEsQ0FBQ0MsSUFBSSxHQUFHTCxDQUFDLENBQUNNLE1BQU0sQ0FBQ0MsVUFBVSxDQUFDQyxPQUFPLENBQUNDLEdBQUc7QUFDMUQ7QUFFQWYsZ0JBQWdCLEVBQUUiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc2hvcExpc3QuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/shopList.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/shopList.js"]();
/******/ 	
/******/ })()
;