<?php
include 'connect.php';
include 'tasks/php/functions.php';
$conn = connect_me();

function registro($nome, $sobrenome, $email, $senha, $repeat)
{
    global $conn;
    $senha = encript_key($senha);
    $date = date("Y/m/d");
    $nome = $nome . " " . $sobrenome;
    $id = generate_id();

    $sql = "INSERT INTO users (`id`,`nome`, `email`, `senha`,`data`) VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $id);
    $stmt->bindParam(2, $nome);
    $stmt->bindParam(3, $email);
    $stmt->bindParam(4, $senha);
    $stmt->bindParam(5, $date);

    $data = "INSERT INTO dados (`id`) VALUES (?)";
    $stmt2 = $conn->prepare($data);
    $stmt2->bindParam(1, $id);

    if ($stmt->execute() && $stmt2->execute()) {
        header("location:?pg=home&key=<?=$id;?>");
    } else {
        //erro
    }
}

function login($data, $senha)
{
    global $conn;
    $senha = md5(md5($senha));

    if (!$data || !$senha) return header("location:?pg=parts/login_pages/login");

    $base = "SELECT * FROM users ";
    if (contains($data, "@")) {
        $sql = $base . "WHERE email = ?";
    } else {
        $sql = $base . "WHERE nome = ?";
    };

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, $data);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach ($result as $x) {
        if (
            $x['nome'] == $data && $x['senha'] == $senha ||
            $x['email'] == $data && $x['senha'] == $senha
        ) {
            echo "achou";
            $key = $x['id'];
            header("location:?pg=home&key=<?=$key;?>");
            break;
        }
    }
}

function search_user($id)
{
    global $conn;

    $sql = "SELECT * FROM users WHERE id = :id";
    $id = my_replace($id, "?", "=", "<", ">", ";");
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":id", $id);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function search_user_data($id)
{
    global $conn;
    $sql = "SELECT * FROM dados WHERE id = :id";
    $id = my_replace($id, "?", "=", "<", ">", ";");
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":id", $id);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}
