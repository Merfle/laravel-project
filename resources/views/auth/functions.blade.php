@php

function registerValidation($data){
$errors=[];
if (strlen($data["name"])<2) {
  $errors["name"]="invalid name.";
}
if (strlen($data["last_name"])<2) {$errors["last_name"]="invalid last name.";}

if (validarSiExiste($data["email"])) {$errors["email"]="this e-mail already exists.";}

if (strlen($data["password"])<7) {$errors["password"]="password too short.";}

if (!filter_var($data["email"],FILTER_VALIDATE_EMAIL)) {$errors["email"]="invalid e-mail.";}

if (date("Y")-$data["birth_year"]<18) {header("Location:https://www.youtube.com/watch?v=dQw4w9WgXcQ");}

if ($_FILES["avatar"]["size"] > 500000) {$errors["avatar"]= "file must be less than 5MB.";}

return $errors;
}

function saveUser($data){

  $archivo= file_get_contents("jsondata.json");

  $saved=json_decode($archivo,true);

  $data["password"]=password_hash($data["password"],PASSWORD_DEFAULT);

  $lastID=(count($saved["users"]));
  $target_dir = "assets/uploads/users/$lastID/";

  if (!is_dir($target_dir)) {mkdir($target_dir, 0777, true);}

  $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
  move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
  $data["avatar"]=$target_file;
  $user=$data;
  $saved["users"][]=$user;
  $userJson=json_encode($saved);
  file_put_contents("jsondata.json",$userJson);
}
function validarSiExiste($email){
  $archivo= file_get_contents("jsondata.json");
  $data= json_decode($archivo,true);
  $available= true;
  for ($i=0; $i < count($data["users"]); $i++) {
    if ($data["users"][$i]["email"]==$email||$data["users"][$i]["email"]==$email) {
      return true;
    }
  }
}

function loguser($datosLogin){
  $archivo= file_get_contents("jsondata.json");
  $data= json_decode($archivo,true);
  for ($i=0; $i < count($data["users"]); $i++) {
    if ($data["users"][$i]["email"]==$dataLogin["email"]) {
      if (password_verify($datosLogin["password"],$data["users"][$i]["password"])) {
        session_start();
        $_SESSION['user']= $data["users"][$i]["email"];
        setcookie("avatar", $data["users"][$i]["avatar"], time() + (86400 * 30));
        header("location:home.blade.php");
      }
    }
  }
}

@endphp
