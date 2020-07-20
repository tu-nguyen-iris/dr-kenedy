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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "kOmT");
/******/ })
/************************************************************************/
/******/ ({

/***/ "XDP4":
/*!**************************!*\
  !*** ./src/js/global.js ***!
  \**************************/
/*! exports provided: default */
/***/ (function(module, exports) {

eval("throw new Error(\"Module build failed (from ./node_modules/babel-loader/lib/index.js):\\nSyntaxError: D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\src\\\\js\\\\global.js: Unexpected token (6:0)\\n\\n\\u001b[0m \\u001b[90m 4 | \\u001b[39m\\u001b[36mimport\\u001b[39m \\u001b[32m\\\"zurb-twentytwenty/js/jquery.event.move\\\"\\u001b[39m\\u001b[0m\\n\\u001b[0m \\u001b[90m 5 | \\u001b[39m\\u001b[36mimport\\u001b[39m \\u001b[32m\\\"zurb-twentytwenty/js/jquery.twentytwenty\\\"\\u001b[39m\\u001b[0m\\n\\u001b[0m\\u001b[31m\\u001b[1m>\\u001b[22m\\u001b[39m\\u001b[90m 6 | \\u001b[39m\\u001b[33m<<\\u001b[39m\\u001b[33m<<\\u001b[39m\\u001b[33m<<\\u001b[39m\\u001b[33m<\\u001b[39m \\u001b[33mHEAD\\u001b[39m\\u001b[0m\\n\\u001b[0m \\u001b[90m   | \\u001b[39m\\u001b[31m\\u001b[1m^\\u001b[22m\\u001b[39m\\u001b[0m\\n\\u001b[0m \\u001b[90m 7 | \\u001b[39m\\u001b[0m\\n\\u001b[0m \\u001b[90m 8 | \\u001b[39m\\u001b[33m===\\u001b[39m\\u001b[33m===\\u001b[39m\\u001b[33m=\\u001b[39m\\u001b[0m\\n\\u001b[0m \\u001b[90m 9 | \\u001b[39m\\u001b[33m>>>\\u001b[39m\\u001b[33m>>>\\u001b[39m\\u001b[33m>\\u001b[39m \\u001b[35m6\\u001b[39mc9e997803a7fedd657f047a980ac02eda7b879b\\u001b[0m\\n    at Parser._raise (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:757:17)\\n    at Parser.raiseWithData (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:750:17)\\n    at Parser.raise (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:744:17)\\n    at Parser.unexpected (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:8834:16)\\n    at Parser.parseExprAtom (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:10176:20)\\n    at Parser.parseExprSubscripts (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9688:23)\\n    at Parser.parseMaybeUnary (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9668:21)\\n    at Parser.parseExprOps (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9538:23)\\n    at Parser.parseMaybeConditional (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9511:23)\\n    at Parser.parseMaybeAssign (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9466:21)\\n    at Parser.parseExpression (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:9418:23)\\n    at Parser.parseStatementContent (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:11339:23)\\n    at Parser.parseStatement (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:11210:17)\\n    at Parser.parseBlockOrModuleBlockBody (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:11785:25)\\n    at Parser.parseBlockBody (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:11771:10)\\n    at Parser.parseTopLevel (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:11141:10)\\n    at Parser.parse (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:12843:10)\\n    at parse (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\parser\\\\lib\\\\index.js:12896:38)\\n    at parser (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\core\\\\lib\\\\parser\\\\index.js:54:34)\\n    at parser.next (<anonymous>)\\n    at normalizeFile (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\core\\\\lib\\\\transformation\\\\normalize-file.js:93:38)\\n    at normalizeFile.next (<anonymous>)\\n    at run (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\core\\\\lib\\\\transformation\\\\index.js:31:50)\\n    at run.next (<anonymous>)\\n    at Function.transform (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\@babel\\\\core\\\\lib\\\\transform.js:27:41)\\n    at transform.next (<anonymous>)\\n    at step (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\gensync\\\\index.js:254:32)\\n    at D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\gensync\\\\index.js:266:13\\n    at async.call.result.err.err (D:\\\\dr_Kenedy\\\\wp-content\\\\themes\\\\kenedy\\\\node_modules\\\\gensync\\\\index.js:216:11)\");\n\n//# sourceURL=webpack:///./src/js/global.js?");

/***/ }),

/***/ "kOmT":
/*!***********************!*\
  !*** ./src/js/app.js ***!
  \***********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _global__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./global */ \"XDP4\");\n\nvar controllers = {};\n\nvar _find = function _find(_class, _str) {\n  if (_class.length > 0) {\n    var _array = null;\n\n    for (var i = 0; i < _class.length; i++) {\n      var n = _class[i].indexOf(_str);\n\n      if (n > 0) {\n        _array = _class[i].replace(\"_\" + _str, \"\");\n        break;\n      }\n    }\n\n    return _array;\n  } else {\n    return null;\n  }\n};\n\nvar router = function router() {\n  var _class = document.body.className.replace(/-/g, \"_\").split(/\\s+/);\n\n  var controller = _find(_class, \"ph\");\n\n  new _global__WEBPACK_IMPORTED_MODULE_0__[\"default\"]();\n\n  if (controller !== null) {\n    if (controllers[controller]) {\n      new controllers[controller]();\n    }\n  }\n};\n\nrouter();\n\n//# sourceURL=webpack:///./src/js/app.js?");

/***/ })

/******/ });