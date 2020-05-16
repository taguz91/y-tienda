<?php 

namespace App\Http\Controllers;

trait CommonResponse {

  function saveObject($object) {
    $guardado = $object->save();
    return [
      'status' => $guardado ? 201 : 400,
      'data' => $object,
    ];
  }

  function updateObject($object, $request) {
    $editado = $object->update($request->all());
    return [
      'status' => $editado ? 200 : 400,
      'data' => $object
    ];
  }

  function deleteObject($object) {
    $eliminado = $object->delete(); 
    return [
      'status' => $eliminado ? 200 : 400,
      'data' => $object
    ];
  }

  function restoreObject($object) {
    $restore = $object->restore();
    return [
      'status' => $restore ? 200 : 400,
      'data' => $object
    ];
  }

  function showResponse($object) {
    return [
      'status' => 200,
      'data' => $object
    ];
  }

}