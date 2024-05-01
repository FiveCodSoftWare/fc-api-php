<?php

header('Content-Type: application/json');
require_once("../config/conexion.php");
require_once("../models/categoria.php");

$categoria = new Categoria();
$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET["op"]) {
  case "GetAll":
      $datos = $categoria->get_categoria();
      echo json_encode($datos);
      break;

  case "GetId":
      if (isset($body["id"])) {
          $datos = $categoria->get_categoria_id($body["id"]);
          echo json_encode($datos);
      } else {
          echo json_encode(["error" => "ID no proporcionado"]);
      }
      break;

  case "insert":
      if (isset($body["nombre"]) && isset($body["descripcion"])) {
          $nombre = $body["nombre"];
          $descripcion = $body["descripcion"];
          $datos = $categoria->insert_categoria($nombre, $descripcion);
          echo json_encode(["mensaje" => "Categoría insertada correctamente"]);
      } else {
          echo json_encode(["error" => "Parámetros incompletos"]);
      }
      break;

  case "update":
      if (isset($body["id"]) && isset($body["nombre"]) && isset($body["descripcion"])) {
          $id = $body["id"];
          $nombre = $body["nombre"];
          $descripcion = $body["descripcion"];
          $datos = $categoria->update_categoria($id, $nombre, $descripcion);
          echo json_encode(["mensaje" => "Categoría actualizada correctamente"]);
      } else {
          echo json_encode(["error" => "Parámetros incompletos"]);
      }
      break;

  case "delete":
      if (isset($body["id"])) {
          $id = $body["id"];
          $datos = $categoria->delete_categoria($id);
          echo json_encode(["mensaje" => "Categoría desactivada correctamente"]);
      } else {
          echo json_encode(["error" => "ID no proporcionado"]);
      }
      break;

  default:
      echo json_encode(["error" => "Operación no válida"]);
}



?>