function mascara(o,f){  
    v_obj=o;  
    v_fun=f;  
    setTimeout("execmascara()",1);  
}  
function execmascara(){   
    v_obj.value=v_fun(v_obj.value);
}  
function cpf(v){     
    v=v.replace(/([^0-9\.]+)/g,''); 
    v=v.replace(/^[\.]/,''); 
    v=v.replace(/[\.][\.]/g,''); 
    v=v.replace(/\.(\d)(\d)(\d)/g,'.$1$2'); 
    v=v.replace(/\.(\d{1,2})\./g,'.$1'); 
    v = v.toString().split('').reverse().join('').replace(/(\d{3})/g,'$1,');    
    v = v.split('').reverse().join('').replace(/^[\,]/,''); 
    return v;  
}  
function calcular(){
    var varMonto;
    var varIva;
    
    varMonto = document.getElementById("costo").value;	
    varMonto = varMonto.replace(/[\,]/g,''); 
    
    varIva = parseFloat(varMonto).toFixed(2) * 1.19;
    document.getElementById("precio_total").value = addCommas(parseFloat(varIva)) ;
}

function addCommas(nStr){
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}