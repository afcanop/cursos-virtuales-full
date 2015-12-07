
<?php 

$txtEmailf = $_POST["txtEmailf"];
$passwordf = $_POST["password"]



$login = array(
	array('USER' => 'and', 	'password' => '123', 'rol'=>'1' ),
	array('USER' => 'Alvar', 'password' => '234', 'rol'=>'2' ),
	array('USER' => 'Uriel', 'password' => '345', 'rol'=>'3' ),
	array('USER' => 'Aldemar', 'password' => '456', 'rol'=>'3' ),
	array('USER' => 'Augusto', 'password' => '567', 'rol'=>'2' ),
	array('USER' => 'Elbert', 'password' => '678', 'rol'=>'1' )
	);

$menu = array(
		array('Rol'=>1, 'Modulo'=>'Ventas', 'Url'=>'index.html'),
		array('Rol'=>1, 'Modulo'=>'Compras', 'Url'=>'compra.php'),
		array('Rol'=>2, 'Modulo'=>'Productos', 'Url'=>'producto.php'),
		array('Rol'=>2, 'Modulo'=>'Clientes', 'Url'=>'cliente.php'),
		array('Rol'=>3, 'Modulo'=>'Catalogo', 'Url'=>'catalogo.php'),
		array('Rol'=>3, 'Modulo'=>'Mapa', 'Url'=>'mapa.php')
	);

$vali = false;
$rol= 0;

foreach ($login as $key => $value) {
	if ($value['USER'] == $txtEmailf  && $value['password'] == $passwordf ) {
		$vali = true; 
		$rol= $value['Rol'];
	};
};

if ($vali != true) {
	header('location:index.php')
	
}; 




?>



