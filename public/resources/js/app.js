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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/app.js":
/*!************************************!*\
  !*** ./resources/assets/js/app.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

!function (s) {
  "use strict";

  var e,
      t = localStorage.getItem("language"),
      n = "eng";

  function a(e) {
    "eng" == e ? document.getElementById("header-lang-img").src = "assets/images/flags/us.jpg" : "sp" == e ? document.getElementById("header-lang-img").src = "assets/images/flags/spain.jpg" : "gr" == e ? document.getElementById("header-lang-img").src = "assets/images/flags/germany.jpg" : "it" == e ? document.getElementById("header-lang-img").src = "assets/images/flags/italy.jpg" : "ru" == e && (document.getElementById("header-lang-img").src = "assets/images/flags/russia.jpg"), localStorage.setItem("language", e), null == (t = localStorage.getItem("language")) && a(n), s.getJSON("assets/lang/" + t + ".json", function (e) {
      s("html").attr("lang", t), s.each(e, function (e, t) {
        "head" === e && s(document).attr("title", t.title), s("[key='" + e + "']").text(t);
      });
    });
  }

  function o(e) {
    1 == s("#light-mode-switch").prop("checked") && "light-mode-switch" === e ? (s("#dark-mode-switch").prop("checked", !1), s("#rtl-mode-switch").prop("checked", !1), s("#bootstrap-style").attr("href", "assets/css/bootstrap.min.css"), s("#app-style").attr("href", "assets/css/app.min.css"), sessionStorage.setItem("is_visited", "light-mode-switch")) : 1 == s("#dark-mode-switch").prop("checked") && "dark-mode-switch" === e ? (s("#light-mode-switch").prop("checked", !1), s("#rtl-mode-switch").prop("checked", !1), s("#bootstrap-style").attr("href", "assets/css/bootstrap-dark.min.css"), s("#app-style").attr("href", "assets/css/app-dark.min.css"), sessionStorage.setItem("is_visited", "dark-mode-switch")) : 1 == s("#rtl-mode-switch").prop("checked") && "rtl-mode-switch" === e && (s("#light-mode-switch").prop("checked", !1), s("#dark-mode-switch").prop("checked", !1), s("#bootstrap-style").attr("href", "assets/css/bootstrap.min.css"), s("#app-style").attr("href", "assets/css/app-rtl.min.css"), sessionStorage.setItem("is_visited", "rtl-mode-switch"));
  }

  function l() {
    document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement || (console.log("pressed"), s("body").removeClass("fullscreen-enable"));
  }

  s("#side-menu").metisMenu(), s("#vertical-menu-btn").on("click", function (e) {
    e.preventDefault(), s("body").toggleClass("sidebar-enable"), 992 <= s(window).width() ? s("body").toggleClass("vertical-collpsed") : s("body").removeClass("vertical-collpsed");
  }), s("#sidebar-menu a").each(function () {
    var e = window.location.href.split(/[?#]/)[0];
    this.href == e && (s(this).addClass("active"), s(this).parent().addClass("mm-active"), s(this).parent().parent().addClass("mm-show"), s(this).parent().parent().prev().addClass("mm-active"), s(this).parent().parent().parent().addClass("mm-active"), s(this).parent().parent().parent().parent().addClass("mm-show"), s(this).parent().parent().parent().parent().parent().addClass("mm-active"));
  }), s(document).ready(function () {
    var e;
    0 < s("#sidebar-menu").length && 0 < s("#sidebar-menu .mm-active .active").length && 300 < (e = s("#sidebar-menu .mm-active .active").offset().top) && (e -= 300, s(".simplebar-content-wrapper").animate({
      scrollTop: e
    }, "slow"));
  }), s(".navbar-nav a").each(function () {
    var e = window.location.href.split(/[?#]/)[0];
    this.href == e && (s(this).addClass("active"), s(this).parent().addClass("active"), s(this).parent().parent().addClass("active"), s(this).parent().parent().parent().addClass("active"), s(this).parent().parent().parent().parent().addClass("active"), s(this).parent().parent().parent().parent().parent().addClass("active"));
  }), s('[data-toggle="fullscreen"]').on("click", function (e) {
    e.preventDefault(), s("body").toggleClass("fullscreen-enable"), document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement ? document.cancelFullScreen ? document.cancelFullScreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitCancelFullScreen && document.webkitCancelFullScreen() : document.documentElement.requestFullscreen ? document.documentElement.requestFullscreen() : document.documentElement.mozRequestFullScreen ? document.documentElement.mozRequestFullScreen() : document.documentElement.webkitRequestFullscreen && document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
  }), document.addEventListener("fullscreenchange", l), document.addEventListener("webkitfullscreenchange", l), document.addEventListener("mozfullscreenchange", l), s(".right-bar-toggle").on("click", function (e) {
    s("body").toggleClass("right-bar-enabled");
  }), s(document).on("click", "body", function (e) {
    0 < s(e.target).closest(".right-bar-toggle, .right-bar").length || s("body").removeClass("right-bar-enabled");
  }), s(".dropdown-menu a.dropdown-toggle").on("click", function (e) {
    return s(this).next().hasClass("show") || s(this).parents(".dropdown-menu").first().find(".show").removeClass("show"), s(this).next(".dropdown-menu").toggleClass("show"), !1;
  }), s(function () {
    s('[data-toggle="tooltip"]').tooltip();
  }), s(function () {
    s('[data-toggle="popover"]').popover();
  }), window.sessionStorage && ((e = sessionStorage.getItem("is_visited")) ? (s(".right-bar input:checkbox").prop("checked", !1), s("#" + e).prop("checked", !0), o(e)) : sessionStorage.setItem("is_visited", "light-mode-switch")), s("#light-mode-switch, #dark-mode-switch, #rtl-mode-switch").on("change", function (e) {
    o(e.target.id);
  }), null != t && t !== n && console.log("lang", t), a(t), s(".language").on("click", function (e) {
    a(s(this).attr("data-lang"));
  }), s(window).on("load", function () {
    s("#status").fadeOut(), s("#preloader").delay(350).fadeOut("slow");
  }), Waves.init();
}(jQuery);

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!********************************************************************!*\
  !*** multi ./resources/assets/js/app.js ./resources/sass/app.scss ***!
  \********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Volumes/HDD/proyectos/test/test/resources/assets/js/app.js */"./resources/assets/js/app.js");
module.exports = __webpack_require__(/*! /Volumes/HDD/proyectos/test/test/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });