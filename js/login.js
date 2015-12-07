var name_space = {
	registro:function(){
		var info = {
			"email":document.forms["registrar"]["txtEmail"].value,
			"txtPasswordRegistrar":document.forms["registrar"]["txtPasswordRegistrar"].value,
			"txtUsuarioRegistrar":document.forms["registrar"]["txtUsuarioRegistrar"].value,
			"txtNombreRegistrar":document.forms["registrar"]["txtNombreRegistrar"].value,
			// "nacimiento":document.forms["registrar"]["nacimiento"].value
		}
		var datos = localStorage.registrar;
		if (datos != null) {
			var obj= JSON.parse(datos);
			obj.push(info);
			var	dat=JSON.stringify(obj);
			
			localStorage.setItem("registrar",dat);
			alert(obj.email);
		} 
		else{
			var arrayregistro= [];
			arrayregistro.push(info);
			var tj = JSON.stringify(arrayregistro);
			localStorage.setItem("registrar",tj); 
		}
	},

	Ingresar:function(){
		var formlogin = document.getElementById("ingresar");

		var objLogin ={
			"txtEmail":formlogin.elements.item(0).value,
			"password":formlogin.elements.item(1).value
		};

		var iniciodesesion = JSON.parse(localStorage.registrar);


		for(var values in iniciodesesion){
			console.log(iniciodesesion[values].txtEmail);


			if (objLogin.txtEmail == iniciodesesion[values].email &&
				objLogin.password == iniciodesesion[values].txtPasswordRegistrar) {
				alert("entro al sistema");
				location.href="index.html";
		}
	}
},
	tabla:function(){

		var tabla = JSON.parse(localStorage.registrar);
		//For para recorrer el localstorage
		for (var value in tabla){
		//traemos el tbody del html con el id
		var tbody = document.getElementById("tabla");
		//Creamos la fila de la tabla
		var row = document.createElement("tr");
		//creamos las columnas que va a tener nuestra tabla
		var td1 = document.createElement("td");
		var td2 = document.createElement("td");
		var td3 = document.createElement("td");
		var td4 = document.createElement("td");
		var td5= document.createElement("td");
		
		//Agregamos la informacion traida del local storage en cada columna
		
		td1.appendChild(document.createTextNode(value)); 
		td2.appendChild(document.createTextNode(tabla[value].email));
		td3.appendChild(document.createTextNode(tabla[value].txtPasswordRegistrar));
		td4.appendChild(document.createTextNode(tabla[value].txtUsuarioRegistrar));
		td5.appendChild(document.createTextNode(tabla[value].txtNombreRegistrar));

		
		//le mandamos las columnas a la fila creada anteriormente
		row.appendChild(td1);
		row.appendChild(td2);
		row.appendChild(td3);
	    row.appendChild(td4);
	    row.appendChild(td5);
	    
		//le mandamos la fila al tablebody <tbody>
		tbody.appendChild(row);
	}
// $("#tabla").DataTable();
}

}


