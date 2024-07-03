<?php
function insert_taikhoan($email, $user, $pass) {
    $sql = "INSERT INTO taikhoan (email, user, pass) 
            VALUES ('$email','$user','$pass')";
    pdo_execute($sql);
}
function insert_taikhoan_admin($email, $user, $pass, $address, $tel) {
    $sql = "INSERT INTO taikhoan (email, user,pass , address, tel) 
            VALUES ('$email','$user','$pass','$address','$tel')";
    pdo_execute($sql);
}

function check_user($user, $pass)   {
    $sql = "SELECT * FROM taikhoan WHERE user = '".$user."' AND pass='".$pass."'";
    $dm = pdo_query_one($sql);
    return $dm;
}

function check_email($email)   {
    $sql = "SELECT * FROM taikhoan WHERE email='".$email."'";
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_taikhoan($id,$email,$user,$pass,$address,$tel)  {
    $sql = "UPDATE taikhoan 
        SET email = '".$email."',
        user = '".$user."',
        pass = '".$pass."',
        address = '".$address."',
        tel = '".$tel."'  
        WHERE id=" . $id;
    pdo_execute($sql);
}

function loadall_taikhoan() {
    $sql = "SELECT * FROM taikhoan ORDER BY id DESC ;";
    $listTaiKhoan = pdo_query($sql);
    return $listTaiKhoan;
}
function delete_taikhoan($id)    {
    $sql = "DELETE  FROM taikhoan WHERE id =" . $_GET['id'];
    pdo_execute($sql);
}
function loadone_taikhoan($id)   {
    $sql = "SELECT * FROM taikhoan WHERE id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_sanpham_admin($id,$user, $pass, $email, $address, $tel,$role)  {
        $sql = "UPDATE taikhoan 
                SET user = '".$user."',
                pass = '".$pass."',
                email = '".$email."',
                address = '".$address."',
                tel = '".$tel."',
                role = '".$role."'  
                WHERE id=" . $id;
    pdo_execute($sql);
}
