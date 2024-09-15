function continuar(){
    var retVal = continuar("¿Seguro desea continuar?");
    if( retVal == true ){
        document.write ("Día agendado, con exito");
        return true;
    }else{
        document.write ("No ha sido posible realizar la");
        return false;
    }
}