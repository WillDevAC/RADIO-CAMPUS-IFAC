<?php

use Radio\Database\Connection;

class User
 {
    //privates
    private $id;
    private $name;
    private $email;
    private $password;

    //função responsavel por validar o login
    public function validarLogin()
 {
        $conn = Connection::getConn();
        var_dump( $conn );
        $sql = 'SELECT * FROM admin WHERE email = :email';
        $stmt = $conn->prepare( $sql );
        $stmt->bindValue( ':email', $this->email );
        var_dump($stmt);
        $stmt->execute();
        if ( $stmt->rowCount() ) {
            $result = $stmt->fetch();

            if ( $result['pass'] === $this->password ) {
                $_SESSION['usr'] = array(
                    'id_user' => $result['id'], 
                    'name_user' => $result['name']
               );
                return true;
           }
        }
        //lançamento de excessão caso de algum erro
        throw new \Exception( 'Acesso não autorizado!' );
    }

    //setters

    public function setEmail( $email )
 {
        $this->email = $email;
    }

    public function setName( $name )
 {
        $this->name = $name;
    }

    public function setPassword( $password )
 {
        $this->password = $password;
    }

    //getters

    public function getName()
 {
        return $this->name;
    }

    public function getEmail()
 {
        return $this->email;
    }

    public function getPassword()
 {
        return $this->password;
    }
}
