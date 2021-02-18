/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 44);
/******/ })
/************************************************************************/
/******/ ({

/***/ 44:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(45);


/***/ }),

/***/ 45:
/***/ (function(module, exports) {

function valid() {
  var x1;
  x1 = document.getElementById("s1").value;

  if (!x1) {
    alert("Please enter the flag!");
  } else if (x1 == "onectf{5eabe85ec9ba2ac17a0f65f4dcac2dc9}") {
    alert("Congratulations");
  } else {
    alert("Wrong Flag");
  }
  document.getElementById("txt").innerHTML = text;
}

function valid2() {
  var x1;
  x1 = document.getElementById("s2").value;

  if (!x1) {
    alert("Please enter the flag!");
  } else if (x1 == "onectf{d059de2edb157c31cbd475ea60e1abd9}") {
    alert("Congratulations");
  } else {
    alert("Wrong Flag");
  }
  document.getElementById("txt").innerHTML = text;
}

function valid3() {
  var x1;
  x1 = document.getElementById("s3").value;

  if (!x1) {
    alert("Please enter the flag!");
  } else if (x1 == "OneCTF{b2e3aa61aadf7f19d296b138e3877b8c}") {
    alert("Congratulations");
  } else {
    alert("Wrong Flag");
  }
  document.getElementById("txt").innerHTML = text;
}

function valid4() {
  var x1;
  x1 = document.getElementById("s4").value;

  if (!x1) {
    alert("Please enter the flag!");
  } else if (x1 == "onectf{d059de2edb157c31cbd475ea60e1abd9}") {
    alert("Congratulations");
  } else {
    alert("Wrong Flag");
  }
  document.getElementById("txt").innerHTML = text;
}

/***/ })

/******/ });