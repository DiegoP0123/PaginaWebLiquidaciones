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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/liquidaciones.js":
/*!***************************************!*\
  !*** ./resources/js/liquidaciones.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  $('#fechaIngreso, #fechaCese').on('change', function () {
    CalendariosdiasDesabilitados();
    CalcularFecha();
  });

  // Al cambiar checkbox
  $('#checkAsigFamiliar').on('change', function () {
    toggleInput('checkAsigFamiliar', 'AsigFamiliar');
  });
  $('#checkComisiones').on('change', function () {
    toggleInput('checkComisiones', 'PromComisiones');
  });
  $('#checkHorasExtras').on('change', function () {
    toggleInput('checkHorasExtras', 'PromHorasExtras');
  });
});
function CalendariosdiasDesabilitados() {
  var fechaIngreso = $('#fechaIngreso').val();
  var $fechaCese = $('#fechaCese');
  if (fechaIngreso) {
    $fechaCese.attr('min', fechaIngreso);
    if ($fechaCese.val() && $fechaCese.val() < fechaIngreso) {
      $fechaCese.val('');
    }
  }
}
function CalcularFecha() {
  console.log('Se ejecuta CalcularFecha');
  var ingresoVal = $('#fechaIngreso').val();
  var salidaVal = $('#fechaCese').val();
  if (ingresoVal && salidaVal) {
    var ingreso = new Date(ingresoVal);
    var salida = new Date(salidaVal);
    var anios = salida.getFullYear() - ingreso.getFullYear();
    var meses = salida.getMonth() - ingreso.getMonth();
    var dias = salida.getDate() - ingreso.getDate();
    if (dias < 0) {
      meses--;
      dias += new Date(salida.getFullYear(), salida.getMonth() + 1, 0).getDate();
    }
    if (meses < 0) {
      anios--;
      meses += 12;
    }
    var resultado = "".concat(anios, " an\u0303os, ").concat(meses, " meses y ").concat(dias, " di\u0301as");
    $('#fechaCalculada').val(resultado);
  } else {
    $('#fechaCalculada').val('');
  }
}
function toggleInput(checkboxId, inputId) {
  var checkbox = $('#' + checkboxId);
  var input = $('#' + inputId);
  if (checkbox.is(':checked')) {
    input.prop('disabled', false);
  } else {
    input.val('');
    input.prop('disabled', true);
  }
}
function EscogerMotivo() {
  var motivo = $('#motivo').val();
  if (motivo == 'arbitrario') {
    //Habilita Campos
  }
}
$('#formCalculadora').on('submit', function (e) {
  e.preventDefault();
  var tiempoServicio = $('#tiempoServicio').val();
  var faltas = $('#faltas').val();
  var sueldo = $('#sueldo').val();
  var asigFamiliar = $('#AsigFamiliar').val();
  var promComisiones = $('#PromComisiones').val();
  var promHorasExtras = $('#PromHorasExtras').val();
});

/***/ }),

/***/ 1:
/*!*********************************************!*\
  !*** multi ./resources/js/liquidaciones.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\pauca\PaginaWebLiquidaciones\resources\js\liquidaciones.js */"./resources/js/liquidaciones.js");


/***/ })

/******/ });