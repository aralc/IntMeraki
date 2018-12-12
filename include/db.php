<?php
class data{
    public function connect()
            {
                try
                    {
                    $con = new PDO('mysql:host=172.31.11.110;dbname=radius','root','NSlab@2k9');
                    }
                catch (PDOException $erro)
                   {
                    echo "ocorreu erro". $erro->getMessage();
                    }
            return $con;
            }
    
}

?>