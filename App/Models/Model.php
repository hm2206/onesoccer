<?php


interface Models{//Todos los models deben de heredar de esta interface

	public function list();//mostrar registro total

	public function view($id);//mostrar registro por medio de la id

	public function edit($id);//editar registro pormedio de la id

	public function update($id);//actualizar el registro por medio de la $id

	public function delete($id);//borrar registro por medio de la id

	public function insert($id);//Insertar registro por medio de la id
}

?>