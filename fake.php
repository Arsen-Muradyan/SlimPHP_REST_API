<?php
require_once __DIR__ . "/vendor/autoload.php";
echo "How many record you want create: ";
$size = intval(readline());

$faker = Faker\Factory::create();
$mysql = new mysqli("localhost", "root", "", "slimapp");
for ($i = 0; $i < $size; $i++) {
  $first_name = strval($faker->firstName());
  $last_name = strval($faker->lastName());
  $phone = strval($faker->phoneNumber());
  $email = strval($faker->safeEmail());
  $address = strval($faker->address());
  $city = strval($faker->city());
  $state = strval($faker->state());
  $query =   $mysql->query("INSERT INTO customers (first_name,last_name,phone,email,address,city,state) VALUES ('$first_name', '$last_name', '$phone', '$email','$address','$city','$state');");

}