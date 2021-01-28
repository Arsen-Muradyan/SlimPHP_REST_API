<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// Get All Customers
$app->get('/api/customers', function (Request $request, Response $response, $args) {
    $sql = "SELECT * FROM `customers`";
    try {
      $db = new DB();
      $db = $db->connect();

      $stmt = $db->query($sql);
      $customers = $stmt->fetchAll(PDO::FETCH_OBJ);
      $db = null;
      $response->getBody()->write(json_encode($customers));
      return $response->withHeader("Content-type", 'application/json');
    } catch (PDOException $e) {
      echo '{"error": {"text": '.$e->getMessage().'}';
    }
    return $response;
});
// Get Single Customer
$app->get('/api/customers/{id}', function (Request $request, Response $response, $args) {
  $sql = "SELECT * FROM `customers` where id=:id";
  try {
    $db = new DB();
    $db = $db->connect();

    $stmt = $db->prepare($sql);
    $stmt->bindParam(":id", $args['id']);
    $stmt->execute();
    $customer = $stmt->fetchAll(PDO::FETCH_OBJ);
    $response->getBody()->write(json_encode($customer));
    return $response->withHeader("Content-type", 'application/json');
  } catch (PDOException $e) {
    echo '{"error": {"text": '.$e->getMessage().'}';
  }
  return $response;
});


// Add Customer
$app->post('/api/customers', function (Request $request, Response $response, $args) {
  $sql = "INSERT INTO customers (first_name,last_name,phone,email,address,city,state) VALUES
  (:first_name,:last_name,:phone,:email,:address,:city,:state)";
  $body = $request->getBody();
  $data = json_decode($body, true);
  try {
    $db = new DB();
    $db = $db->connect();
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":first_name", $data['first_name']);
    $stmt->bindParam(":last_name", $data['last_name']);
    $stmt->bindParam(":phone", $data['phone']);
    $stmt->bindParam(":email", $data['email']);
    $stmt->bindParam(":address", $data['address']);
    $stmt->bindParam(":city", $data['city']);
    $stmt->bindParam(":state", $data['state']);


    $stmt->execute();

    $response->getBody()->write('{"notice": {"text": "Customer Added"}}');
    return $response->withHeader("Content-type", 'application/json');
  } catch (PDOException $e) {
    echo '{"error": {"text": '.$e->getMessage().'}';
  }
  return $response;
});
// Update Customer
$app->put("/api/customers/{id}", function (Request $request, Response $response, $args) {

  $sql = "UPDATE customers SET
          first_name=:first_name,
          last_name=:last_name,
          phone=:phone,
          email=:email,
          address=:address,
          city=:city,
          state=:state WHERE id=:id";

  $body = $request->getBody();
  $data = json_decode($body, true);
  try {
    $db = new DB();
    $db = $db->connect();
    $stmt = $db->prepare($sql);
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":id", $args['id']);
    $stmt->bindParam(":first_name", $data['first_name']);
    $stmt->bindParam(":last_name", $data['last_name']);
    $stmt->bindParam(":phone", $data['phone']);
    $stmt->bindParam(":email", $data['email']);
    $stmt->bindParam(":address", $data['address']);
    $stmt->bindParam(":city", $data['city']);
    $stmt->bindParam(":state", $data['state']);


    $stmt->execute();

    $response->getBody()->write('{"notice": {"text": "Customer Updated"}}');
    return $response->withHeader("Content-type", 'application/json');  } catch (PDOException $e) {
    echo '{"error": {"text": '.$e->getMessage().'}';
  }
  return $response;
});
// Delete Customer
$app->delete('/api/customers/{id}', function (Request $request, Response $response, $args) {
  $sql = "DELETE FROM `customers` where id=:id";
  try {
    $db = new DB();
    $db = $db->connect();

    $stmt = $db->prepare($sql);
    $stmt->bindParam(":id", $args['id']);
    $stmt->execute();

    $response->getBody()->write('{"notice": {"text": "Customer Deleted"}}');
    return $response->withHeader("Content-type", 'application/json');
  } catch (PDOException $e) {
    echo '{"error": {"text": '.$e->getMessage().'}';
  }
  return $response;
});