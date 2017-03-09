<?php

class Model_User extends BaseModel {

    public function getUserInfo($user_id)
    {
//        return $this->DB['liuweico']->get(
//            "jcc_users",
//            ["user_id", "email", "real_name"], ["user_id" => $user_id]);


        $result = $this->oDb->get("jcc_users",
            ["user_id", "email", "real_name"], ["user_id" => $user_id]);

        return $result;

//        $oStmt = $this->oDb->prepare('SELECT email, password FROM Admins WHERE email = :email LIMIT 1');
//        $oStmt->bindValue(':email', $sEmail, \PDO::PARAM_STR);
//        $oStmt->execute();
//        $oRow = $oStmt->fetch(\PDO::FETCH_OBJ);
//
//        return password_verify($sPassword, @$oRow->password);

    }
}
