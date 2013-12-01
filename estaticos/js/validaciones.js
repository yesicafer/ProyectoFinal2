
function validarcliente(){
 
 var nombre=document.getElementById("nombres").value;
 var apellido=document.getElementById("apellidos").value;
 var ide=document.getElementById("identificacion").value;
 var telefono=document.getElementById("telefono").value;
 var localidad=document.getElementById("localidad").value;
 
 if(nombre ==""){
     alert("El campo nombre es un dato obligatorio");
     return;
 }
  if(apellido== ""){
     alert("El campo apellido es un dato obligatorio");
     return;
 }  
  if(ide!=parseInt(ide)){
     alert("El campo identificacion debe ser númerico");
     return;
 }  
 document.getElementById("formcliente").submit();
}