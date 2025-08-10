<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquidaciones</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
    <style>
        body {
            padding-top: 56px;
            /* Altura estándar del navbar en Bootstrap 4 */
        }

        .header {
            display: block;
        }

        .navbar .container {
            padding-left: 15px;
            padding-right: 15px;
        }

        .navbar-expand-lg {
            background-color: black;
            border-bottom: none;
            transition: background-color 0.25s ease 0s;
        }

        .navbar {
            width: 100%;
            z-index: 9999;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 0;
            padding-right: 0;
        }

        .hero-section {
            min-height: 50vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: url(https://cdn.pixabay.com/photo/2014/07/06/13/55/calculator-385506_1280.jpg) no-repeat center/cover;
            position: relative;
            text-align: center;
            color: white;
            padding: 2rem 1rem;
        }

        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }


        .hero-section>.container {
            position: relative;
            z-index: 1;
        }

        .navbar-fixed-top .navbar-nav>li>a {
            color: #fff;
            font-size: 17px !important;
            line-height: 30px !important;
            padding: 10px 15px !important;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">DiegoPage</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#conceptos">¿Qué es una liquidación?</a></li>
                        <li class="nav-item"><a class="nav-link" href="#calculadora">Calculadora</a></li>
                        <li class="nav-item"><a class="nav-link" href="#beneficios">Beneficios Sociales</a></li>
                        <li class="nav-item"><a class="nav-link" href="#faq">Preguntas Frecuentes</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="home" class="hero-section d-flex align-items-center text-white">
        <div class="container text-center">
            <h1 class="display-4 mb-4">Calcula tu Liquidación Laboral</h1>
            <p class="lead mb-5">Herramienta rápida, gratuita y confiable para calcular tus beneficios laborales en Perú.</p>
            <a href="#calculadora" class="btn btn-primary btn-lg">Ir a la Calculadora</a>
        </div>
    </section>
    <section class="section-grey py-5" id="inicio" style="background-color: #f8f9fa">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2>Bienvenido a la Calculadora de Liquidaciones</h2>
                    <p>Soy Diego, estudiante de desarrollo de software. Este proyecto tiene como objetivo ayudarte a calcular de forma rápida y sencilla los beneficios que te corresponden por ley en una liquidación laboral en Perú.</p>
                    <p class="mb-4">
                        La idea de esta herramienta surgió al investigar sobre temas laborales, guiándome especialmente del siguiente recurso educativo:
                    </p>
                </div>
                <div class="col-md-6">
                    <iframe width="100%" height="315"
                        src="https://www.youtube.com/embed/9S-n8brh3zU"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    <section id="conceptos" class="py-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">¿Qué es una Liquidación Laboral?</h2>
                <p style="font-size: 18px; max-width: 800px; margin: 0 auto;">
                    La liquidación laboral es el procedimiento mediante el cual un empleador entrega al trabajador todos los pagos pendientes tras el fin de la relación laboral. Esto incluye beneficios sociales acumulados como sueldos, vacaciones, CTS, gratificaciones, y otros derechos que corresponden por ley. La liquidación varía según el motivo del cese: renuncia, despido, finalización de contrato o mutuo acuerdo.
                </p>
            </div>

            <div class="row text-center">
                <!-- Sueldo pendiente -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm border-0 p-3">
                        <img src="https://img.icons8.com/ios-filled/100/money.png" class="mb-3 mx-auto" style="height: 120px;" alt="Sueldo">
                        <h5>Sueldo pendiente</h5>
                        <p>Corresponde al pago proporcional por los días laborados en el último mes trabajado.</p>
                    </div>
                </div>
                <!-- Vacaciones truncas -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm border-0 p-3">
                        <img src="https://img.icons8.com/ios-filled/100/beach.png" class="mb-3 mx-auto" style="height: 120px;" alt="Vacaciones">
                        <h5>Vacaciones truncas</h5>
                        <p>Compensación por los días de vacaciones generados y no gozados hasta el momento del cese.</p>
                    </div>
                </div>
                <!-- Gratificación trunca -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm border-0 p-3">
                        <img src="https://img.icons8.com/ios-filled/100/gift.png" class="mb-3 mx-auto" style="height: 120px;" alt="Gratificación">
                        <h5>Gratificación trunca</h5>
                        <p>Se paga proporcionalmente si el trabajador cesa antes de julio o diciembre, según la normativa vigente.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm border-0 p-3">
                        <img src="https://img.icons8.com/ios-filled/100/savings.png" class="mb-3 mx-auto" style="height: 120px;" alt="CTS">
                        <h5>CTS trunca</h5>
                        <p>CTS o Compensacion por Tiempo de Servicio equivale al sueldo completo mas 1/6 por año de trabajo </p>
                    </div>
                </div>
                <!-- Indemnización -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm border-0 p-3">
                        <img src="https://img.icons8.com/ios-filled/100/no-entry.png" class="mb-3 mx-auto" style="height: 120px;" alt="Indemnización">
                        <h5>Indemnización</h5>
                        <p>Se paga únicamente en casos de despido arbitrario o sin causa legal justificada.</p>
                    </div>
                </div>
                <!-- Otros beneficios -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm border-0 p-3">
                        <img src="https://img.icons8.com/ios-filled/100/money-bag.png" class="mb-3 mx-auto" style="height: 120px;" alt="Otros">
                        <h5>Otros beneficios</h5>
                        <p>Incluye bonificaciones, horas extras, asignaciones familiares u otros pagos pendientes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="section-title">¿Cómo se calculan los beneficios?</h2>
                <p style="font-size: 18px; max-width: 800px; margin: 0 auto;">
                    A continuación, te explicamos brevemente cómo se calculan los principales conceptos incluidos en tu liquidación laboral en Perú. Estos cálculos siguen los lineamientos legales vigentes:
                </p>
            </div>
            <div class="row">
                <!-- Paso 1 -->
                <div class="col-md-6 mb-4">
                    <h5><i class="fas fa-calendar-check text-primary"></i> Calculamos tu fecha</h5>
                    <p>Se determina tu tiempo de servicio a partir de la <strong>fecha de ingreso</strong> y <strong>fecha de cese</strong>, considerando también las faltas injustificadas si las hubiera.</p>
                </div>
                <!-- Paso 2 -->
                <div class="col-md-6 mb-4">
                    <h5><i class="fas fa-clipboard-list text-success"></i> Escoge el motivo</h5>
                    <p>Selecciona el motivo por el cual se te otorga la liquidación laboral (renuncia, despido, mutuo acuerdo, despido arbitrario, etc.).</p>
                </div>
                <!-- Paso 3 -->
                <div class="col-md-6 mb-4">
                    <h5><i class="fas fa-calculator text-warning"></i> Remuneración Computable</h5>
                    <p>Incluye tu <strong>sueldo mensual</strong>, <strong>asignación familiar</strong>, y si aplica, el <strong>promedio de comisiones</strong> y <strong>horas extras</strong>. Con esto se calcula la remuneración computable para gratificaciones y vacaciones.</p>
                </div>
                <!-- Paso 4 -->
                <div class="col-md-6 mb-4">
                    <h5><i class="fas fa-piggy-bank text-danger"></i> Remuneración Computable CTS</h5>
                    <p>Se calcula sumando la <strong>remuneración computable</strong> más 1/6 de la gratificación, obteniendo así la base para el cálculo de la CTS.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="calculadora" class="py-5 bg-light">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0 text-center">Calculadora de Liquidación Laboral</h4>
                </div>
                <div class="card-body">
                    <form id="formCalculadora">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="fechaIngreso">Fecha de Ingreso</label>
                                <input type="date" class="form-control" id="fechaIngreso" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fechaCese">Fecha de Cese</label>
                                <input type="date" class="form-control" id="fechaCese" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tiempoServicio">Tiempo de Servicio</label>
                                <input type="text" class="form-control" id="fechaCalculada" disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="faltas">Faltas Injustificadas</label>
                                <input type="number" class="form-control" id="faltas" value="0" min="0">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="motivo">Motivo de Cese</label>
                                <select class="form-control" id="motivo" onchange="EscogerMotivo()" required>
                                    <option value="">Seleccionar...</option>
                                    <option value="renuncia">Renuncia</option>
                                    <option value="despido">Despido Justificado</option>
                                    <option value="mutuo">Mutuo Acuerdo</option>
                                    <option value="arbitrario">Despido Arbitrario</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Sueldo">Sueldo Mensual</label>
                                <input type="number" class="form-control" id="sueldo" value="0" min="0" required>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="checkAsigFamiliar">
                                    <label class="form-check-label" for="checkAsigFamiliar">
                                        ¿Tiene Asignación Familiar?
                                    </label>
                                </div>
                                <input type="number" class="form-control" id="AsigFamiliar" placeholder="Asignación Familiar" disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="checkComisiones">
                                    <label class="form-check-label" for="checkComisiones">
                                        ¿Tiene Promedio de Comisiones?
                                    </label>
                                </div>
                                <input type="number" class="form-control" id="PromComisiones" placeholder="Promedio de Comisiones" disabled>
                                <small class="form-text text-muted">
                                    Ingrese el promedio mensual de los últimos 6 meses.
                                </small>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="checkHorasExtras">
                                    <label class="form-check-label" for="checkHorasExtras">
                                        ¿Tiene Promedio de Horas Extras?
                                    </label>
                                </div>
                                <input type="number" class="form-control" id="PromHorasExtras" placeholder="Promedio de Horas Extras" disabled>
                                <small class="form-text text-muted">
                                    Ingrese el promedio mensual de los últimos 6 meses.
                                </small>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-success btn-lg">Calcular Liquidación</button>
                        </div>
                    </form>
                    <div style="display: none;" id="resultado">
                        <div class="row g-3 mt-3" id="resumenTotales">
                            <div class="col-md-6 col-xl-3 mt-1">
                                <div class="card text-center shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title">Total CTS</h6>
                                        <p class="display-6 mb-0" id="totalCTS">S/ 0.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3 mt-1">
                                <div class="card text-center shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title">Total Gratificaciones</h6>
                                        <p class="display-6 mb-0" id="totalGratificacion">S/ 0.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3 mt-1">
                                <div class="card text-center shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title">Liquidación Total</h6>
                                        <p class="display-5 fw-bold mb-0 text-success" id="liquidacionTotal">S/ 0.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3 mt-1">
                                <div class="card text-center shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title">Total General</h6>
                                        <p class="display-5 fw-bold mb-0 text-success" id="liquidacionTotal">S/ 0.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="nav nav-tabs nav-fill mb-3 mt-3" id="detalleTabs" role="tablist">
                            <li class="nav-item" title="Detalle CTS">
                                <a class="nav-link active" id="cts-tab" data-toggle="tab" href="#cts" role="tab" aria-selected="true">
                                    <i class="fas fa-piggy-bank"></i>
                                    <span class="d-none d-md-inline"> CTS</span>
                                </a>
                            </li>
                            <li class="nav-item" title="Vacaciones Truncas">
                                <a class="nav-link" id="vaciones-tab" data-toggle="tab" href="#vacaciones" role="tab" aria-selected="false">
                                    <i class="fas fa-umbrella-beach"></i>
                                    <span class="d-none d-md-inline"> Vacaciones</span>
                                </a>
                            </li>
                            <li class="nav-item" title="Gratificaciones Truncas">
                                <a class="nav-link" id="gratificaciones-tab" data-toggle="tab" href="#gratificaciones" role="tab" aria-selected="false">
                                    <i class="fas fa-gift"></i>
                                    <span class="d-none d-md-inline"> Gratificaciones</span>
                                </a>
                            </li>
                            <li class="nav-item" title="Otros Ingresos">
                                <a class="nav-link" id="otros-tab" data-toggle="tab" href="#otros" role="tab" aria-selected="false">
                                    <i class="fas fa-coins"></i>
                                    <span class="d-none d-md-inline"> Otros</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content" id="detalleTabsContent">
                            <div class="tab-pane fade show active" id="cts" role="tabpanel" aria-labelledby="cts-tab">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Concepto</th>
                                            <th>Tiempo</th>
                                            <th>Monto</th>
                                        </tr>
                                    </thead>
                                    <tbody id="gratDetalle">
                                        <tr>
                                            <td>Años</td>
                                            <td id="aniosCTS">0</td>
                                            <td id="montoAniosCTS">S/ 0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Meses</td>
                                            <td id="mesesCTS">12</td>
                                            <td id="montoMesesCTS">S/ 0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Dias</td>
                                            <td id="diasCTS">12</td>
                                            <td id="montoDiasCTS">S/ 0.00</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="font-weight-bold">
                                            <td colspan="2">Total CTS</td>
                                            <td id="totalCTS">S/ 0.00</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="vacaciones" role="tabpanel" aria-labelledby="vaciones-tab">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Concepto</th>
                                            <th>Tiempo</th>
                                            <th>Monto</th>
                                        </tr>
                                    </thead>
                                    <tbody id="gratDetalle">
                                        <tr>
                                            <td>Tiempo Computable</td>
                                            <td id="aniosCTS">0</td>
                                            <td id="montoAniosCTS">S/ 0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Tiempo Pagado</td>
                                            <td id="mesesCTS">12</td>
                                            <td id="montoMesesCTS">S/ 0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Meses</td>
                                            <td id="diasCTS">12</td>
                                            <td id="montoDiasCTS">S/ 0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Días</td>
                                            <td id="mesesCTS">12</td>
                                            <td id="montoMesesCTS">S/ 0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Días Efectivos</td>
                                            <td id="diasCTS">12</td>
                                            <td id="montoDiasCTS">S/ 0.00</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="font-weight-bold">
                                            <td colspan="2">Total Vacaciones Truncas</td>
                                            <td id="subtotalGratificacion">S/ 0.00</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="gratificaciones" role="tabpanel" aria-labelledby="gratificaciones-tab">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Concepto</th>
                                            <th>Tiempo</th>
                                            <th>Monto</th>
                                        </tr>
                                    </thead>
                                    <tbody id="gratDetalle">
                                        <tr>
                                            <td>Tiempo por Pagar</td>
                                            <td id="aniosCTS">0</td>
                                            <td id="montoAniosCTS">S/ 0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Meses Efectivos</td>
                                            <td id="mesesCTS">12</td>
                                            <td id="montoMesesCTS">S/ 0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Bono Ley 30334</td>
                                            <td id="diasCTS">12</td>
                                            <td id="montoDiasCTS">S/ 0.00</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="font-weight-bold">
                                            <td colspan="2">Total Gratificaciónes Truncas</td>
                                            <td id="subtotalGratificacion">S/ 0.00</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="otros" role="tabpanel" aria-labelledby="otros-tab">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Concepto</th>
                                            <th>Tiempo</th>
                                            <th>Monto</th>
                                        </tr>
                                    </thead>
                                    <tbody id="gratDetalle">
                                        <tr>
                                            <td>Indemnización Vacacional</td>
                                            <td id="aniosCTS">0</td>
                                            <td id="montoAniosCTS">S/ 0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Devolucion 5ta</td>
                                            <td id="mesesCTS">12</td>
                                            <td id="montoMesesCTS">S/ 0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Remuneración Mensual</td>
                                            <td id="diasCTS">12</td>
                                            <td id="montoDiasCTS">S/ 0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Movilidad Supeditada a Asistente</td>
                                            <td id="diasCTS">12</td>
                                            <td id="montoDiasCTS">S/ 0.00</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="font-weight-bold">
                                            <td colspan="2">Total</td>
                                            <td id="subtotalGratificacion">S/ 0.00</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="py-5 bg-white" id="beneficios">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="section-title">¿Cuáles son tus beneficios sociales? 💼</h2>
                <p style="font-size: 18px; max-width: 800px; margin: 0 auto;">
                    Al finalizar tu vínculo laboral, la empresa debe pagarte tus <strong>beneficios sociales</strong>, es decir, los montos que por ley te corresponden por el tiempo que trabajaste. Estos incluyen:
                </p>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h5><i class="fas fa-umbrella-beach text-primary"></i> Vacaciones truncas</h5>
                    <p>Recibirás el pago proporcional por los días de vacaciones que no llegaste a disfrutar, calculado en base a tu sueldo mensual.</p>
                </div>
                <div class="col-md-6 mb-4">
                    <h5><i class="fas fa-gift text-success"></i> Gratificación trunca</h5>
                    <p>Obtendrás una gratificación proporcional al tiempo trabajado en el semestre, como un pago adicional a tu sueldo.</p>
                </div>
                <div class="col-md-6 mb-4">
                    <h5><i class="fas fa-piggy-bank text-warning"></i> CTS trunca</h5>
                    <p>Recibirás el depósito de tu Compensación por Tiempo de Servicios (CTS) correspondiente al periodo trabajado.</p>
                </div>
                <div class="col-md-6 mb-4">
                    <h5><i class="fas fa-calendar-day text-danger"></i> Sueldo pendiente</h5>
                    <p>Se te pagarán los días efectivamente trabajados en el mes de tu cese, calculados en base a tu remuneración mensual.</p>
                </div>
                <div class="col-md-12 mb-4">
                    <h5><i class="fas fa-balance-scale text-secondary"></i> Indemnización (si aplica)</h5>
                    <p>Si corresponde, recibirás una compensación adicional por despido arbitrario, equivalente a un sueldo y medio por año de servicio.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" id="faq" style="background-color: #f8f9fa">
        <div class="container mb-3">
            <div class="text-center mb-4">
                <h2 class="section-title">Preguntas Frecuentes</h2>
                <p class="text-muted">Resolvemos las dudas más comunes sobre el cálculo de la liquidación.</p>
            </div>

            <div id="faqAccordion" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <div class="card-header" role="tab" id="faq1-heading">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#faqAccordion" href="#faq1" aria-expanded="false" aria-controls="faq1">
                                ¿Qué es la liquidación de beneficios sociales?
                            </a>
                        </h5>
                    </div>
                    <div id="faq1" class="collapse" role="tabpanel" aria-labelledby="faq1-heading">
                        <div class="card-body">
                            Es el pago que recibe un trabajador al finalizar su vínculo laboral, incluyendo beneficios pendientes como CTS, vacaciones truncas, gratificaciones y otros conceptos.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" role="tab" id="faq2-heading">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#faqAccordion" href="#faq2" aria-expanded="false" aria-controls="faq2">
                                ¿Qué necesito para calcular mi liquidación?
                            </a>
                        </h5>
                    </div>
                    <div id="faq2" class="collapse" role="tabpanel" aria-labelledby="faq2-heading">
                        <div class="card-body">
                            Necesitas conocer tu sueldo bruto mensual, fecha de inicio y cese laboral, y si tienes beneficios pendientes como vacaciones o gratificaciones.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" role="tab" id="faq3-heading">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#faqAccordion" href="#faq3" aria-expanded="false" aria-controls="faq3">
                                ¿La calculadora es 100% exacta?
                            </a>
                        </h5>
                    </div>
                    <div id="faq3" class="collapse" role="tabpanel" aria-labelledby="faq3-heading">
                        <div class="card-body">
                            La calculadora ofrece un cálculo aproximado basado en la normativa vigente. Factores como descuentos legales o bonificaciones especiales pueden variar.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>Contacto</h5>
                    <p><i class="fas fa-map-marker-alt"></i> Lima, Perú</p>
                    <p><i class="fas fa-envelope"></i> paucardiego355@gmail.com</p>
                    <p><i class="fas fa-phone"></i> +51 929 334 507</p>
                </div>

                <div class="col-md-4 mb-4">
                    <h5>Enlaces</h5>
                    <ul class="list-unstyled">
                        <li><a href="#inicio" class="text-white">Inicio</a></li>
                        <li><a href="#calculadora" class="text-white">Calculadora</a></li>
                        <li><a href="#faq" class="text-white">Preguntas Frecuentes</a></li>
                        <li><a href="#contacto" class="text-white">Contacto</a></li>
                    </ul>
                </div>

                <div class="col-md-4 mb-4">
                    <h5>Síguenos</h5>
                    <a href="#" class="text-white mr-3"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" class="text-white mr-3"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin fa-2x"></i></a>
                </div>
            </div>

            <div class="text-center mt-3">
                <small>&copy; 2025 Calcula tu Liquidación. Todos los derechos reservados.</small>
            </div>
        </div>
    </footer>
</body>
<script src="{{ mix('js/liquidaciones.js') }}"></script>

</html>