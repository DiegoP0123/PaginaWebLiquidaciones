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

function CalendariosdiasDesabilitados(){
    const fechaIngreso = $('#fechaIngreso').val();
    const $fechaCese = $('#fechaCese');
    
    if(fechaIngreso){
        $fechaCese.attr('min', fechaIngreso);

        if($fechaCese.val() && $fechaCese.val() < fechaIngreso){
            $fechaCese.val('');
        }
    }
}


function CalcularFecha(){
    console.log('Se ejecuta CalcularFecha');
    const ingresoVal = $('#fechaIngreso').val();
    const salidaVal = $('#fechaCese').val();

    if(ingresoVal && salidaVal){
        const ingreso = new Date(ingresoVal);
        const salida = new Date(salidaVal);

        let anios = salida.getFullYear() - ingreso.getFullYear();
        let meses = salida.getMonth() - ingreso.getMonth();
        let dias = salida.getDate() - ingreso.getDate();

        if(dias < 0){
            meses--;
            dias += new Date(salida.getFullYear(), salida.getMonth() + 1, 0).getDate();
        }

        if(meses < 0){
            anios--;
            meses += 12;
        }

        const resultado = `${anios} años, ${meses} meses y ${dias} días`;
        $('#fechaCalculada').val(resultado);
    } else {
        $('#fechaCalculada').val('');
    }
}

function toggleInput(checkboxId, inputId) {
    const checkbox = $('#' + checkboxId);
    const input = $('#' + inputId);

    if(checkbox.is(':checked')){
        input.prop('disabled', false);
    } else {
        input.val('');
        input.prop('disabled', true);
    }
}

function EscogerMotivo(){
    const motivo = $('#motivo').val();

    if (motivo == 'arbitrario'){
        //Habilita Campos
    }
}



$('#formCalculadora').on('submit', function(e) {
    e.preventDefault();

    const tiempoServicio = $('#tiempoServicio').val();
    const faltas = $('#faltas').val();
    const sueldo = $('#sueldo').val();
    const asigFamiliar = $('#AsigFamiliar').val();
    const promComisiones = $('#PromComisiones').val();
    const promHorasExtras = $('#PromHorasExtras').val();
    
    
});